<?php
namespace Model;

use \Entity\Comment;

class CommentsManagerPDO extends CommentsManager
{
  protected function add(Comment $comment)
  {
    $q = $this->dao->prepare('INSERT INTO comments SET news = :news, auteur = :auteur, contenu = :contenu, moderation = :moderation, date = NOW()');

    $comment->setModeration('NON'); // Par défaut le commentaire ajouté n'est pas signalé
    
    $q->bindValue(':news', $comment->news(), \PDO::PARAM_INT);
    $q->bindValue(':auteur', $comment->auteur());
    $q->bindValue(':contenu', $comment->contenu());
    $q->bindValue(':moderation', $comment->moderation());
    
    $q->execute();
    
    $comment->setId($this->dao->lastInsertId());
  }

  public function delete($id)
  {
    $this->dao->exec('DELETE FROM comments WHERE id = '.(int) $id);
  }

  public function deleteFromNews($news)
  {
    $this->dao->exec('DELETE FROM comments WHERE news = '.(int) $news);
  }
  
  public function getListOf($news)
  {
    if (!ctype_digit($news))
    {
      throw new \InvalidArgumentException('L\'identifiant de la news passé doit être un nombre entier valide');
    }

    $moderation='NON'; // Commentaire non signalé
    
    $q = $this->dao->prepare('SELECT id, news, auteur, contenu, moderation, date FROM comments WHERE news = :news AND moderation = :moderation');
    $q->bindValue(':news', $news, \PDO::PARAM_INT);
    $q->bindValue(':moderation', $moderation);
    $q->execute();
    
    $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Comment');
    
    $comments = $q->fetchAll();
    
    foreach ($comments as $comment)
    {
      $comment->setDate(new \DateTime($comment->date()));
    }
    
    return $comments;
  }

  protected function modify(Comment $comment)
  {
    $q = $this->dao->prepare('UPDATE comments SET auteur = :auteur, contenu = :contenu WHERE id = :id');
    
    $q->bindValue(':auteur', $comment->auteur());
    $q->bindValue(':contenu', $comment->contenu());
    $q->bindValue(':id', $comment->id(), \PDO::PARAM_INT);
    
    $q->execute();
  }
  
  public function get($id)
  {
    $q = $this->dao->prepare('SELECT id, news, auteur, contenu, moderation FROM comments WHERE id = :id');
    $q->bindValue(':id', (int) $id, \PDO::PARAM_INT);
    $q->execute();
    
    $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Comment');
    
    return $q->fetch();
  }

  public function signaler($id)
  {
    $q = $this->dao->prepare('UPDATE comments SET moderation = :moderation WHERE id = :id');

    $moderation ='OUI';
    
    
    $q->bindValue(':moderation', $moderation);
    $q->bindValue(':id', $id, \PDO::PARAM_INT);
    
    $q->execute();
  }

  public function getListOfCommentsSignales()
  {
    

    $moderation='OUI'; // Commentaire  signalé
    
    $q = $this->dao->prepare('SELECT id, news, auteur, contenu, moderation, date FROM comments WHERE moderation = :moderation');
    
    $q->bindValue(':moderation', $moderation);
    $q->execute();
    
    $q->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Entity\Comment');
    
    $comments = $q->fetchAll();
    
    foreach ($comments as $comment)
    {
      $comment->setDate(new \DateTime($comment->date()));
    }
    
    return $comments;
  }

  public function countSignales()
  {
    return $this->dao->query("SELECT COUNT(*) FROM comments WHERE moderation ='OUI' ")->fetchColumn();
  }

  public function moderationDeOuiANon($id)
  {
   
    $moderation='NON';

    $q = $this->dao->prepare('UPDATE comments SET moderation = :moderation WHERE id = :id');
    
    $q->bindValue(':moderation', $moderation);
    
    $q->bindValue(':id', $id, \PDO::PARAM_INT);
    
    $q->execute();
  }
}
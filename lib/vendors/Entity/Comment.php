<?php
namespace Entity;

use \OCFram\Entity;

class Comment extends Entity 
{
  protected $news,
            $auteur,
            $contenu,
            $moderation,
            $date;

  const AUTEUR_INVALIDE = 1;
  const CONTENU_INVALIDE = 2;
  const MODERATION_INVALIDE = 3;

  public function isValid()
  {
    return !(empty($this->auteur) || empty($this->contenu));
  }

  public function setNews($news)
  {
    $this->news = (int) $news;
  }

  public function setAuteur($auteur)
  {
    if (!is_string($auteur) || empty($auteur))
    {
      $this->erreurs[] = self::AUTEUR_INVALIDE;
    }

    $this->auteur = $auteur;
  }

  public function setContenu($contenu)
  {
    if (!is_string($contenu) || empty($contenu))
    {
      $this->erreurs[] = self::CONTENU_INVALIDE;
    }

    $this->contenu = $contenu;
  }

  public function setModeration($moderation)
  {
    if(!is_string($moderation) || empty($moderation))
    {
      $this->erreurs[] = self::MODERATION_INVALIDE;
    }

    $this->moderation = $moderation;
  }

  public function setDate(\DateTime $date)
  {
    $this->date = $date;
  }

  public function news()
  {
    return $this->news;
  }

  public function auteur()
  {
    return $this->auteur;
  }

  public function contenu()
  {
    return $this->contenu;
  }

  public function moderation()
  {
    return $this->moderation;
  }

  public function date()
  {
    return $this->date;
  }
}
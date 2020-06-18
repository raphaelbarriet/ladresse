<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact {

    /**
     * @var string|null
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Votre nom doit faire 2 charactères minimum",
     *      maxMessage = "Votre nom ne peut pas faire plus de 50 charactères",
     *      allowEmptyString = false
     * )
     */
   private $username;

   /**
    * 
    * @var string|null
    * @Assert\NotBlank
    * @Assert\Email
    */
   private $email;

   /**
     * @Assert\Length(
     *      min = 20,
     *      max = 1000,
     *      minMessage = "Votre message doit contenir au moins 20 characters",
     *      maxMessage = "Votre message ne doit pas depasser les 1000 characters",
     *      allowEmptyString = false
     * )
     * @Assert\NotBlank
    * @var string|null
    */
   private $message;

   /** 
    * @Assert\NotBlank
   */
   private $subject;


   /**
    * Get the value of username
    *
    * @return  string|null
    */ 
   public function getUsername()
   {
      return $this->username;
   }

   /**
    * Set the value of username
    *
    * @param  string|null  $username
    *
    * @return  self
    */ 
   public function setUsername($username)
   {
      $this->username = $username;

      return $this;
   }

   /**
    * Get the value of email
    *
    * @return  string|null
    */ 
   public function getEmail()
   {
      return $this->email;
   }

   /**
    * Set the value of email
    *
    * @param  string|null  $email
    *
    * @return  self
    */ 
   public function setEmail($email)
   {
      $this->email = $email;

      return $this;
   }

   /**
    * Get the value of message
    *
    * @return  string|null
    */ 
   public function getMessage()
   {
      return $this->message;
   }

   /**
    * Set the value of message
    *
    * @param  string|null  $message
    *
    * @return  self
    */ 
   public function setMessage($message)
   {
      $this->message = $message;

      return $this;
   }

   /**
    * Get the value of subject
    */ 
   public function getSubject()
   {
      return $this->subject;
   }

   /**
    * Set the value of subject
    *
    * @return  self
    */ 
   public function setSubject($subject)
   {
      $this->subject = $subject;

      return $this;
   }
}
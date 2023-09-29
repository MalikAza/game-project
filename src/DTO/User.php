<?php

namespace GameProject\DTO;

use DateTime;

class User {
    private int $id;
    private string $email;
    private string $pseudo;
    private string $avatar;
    private DateTime $birth;
    private string $password;
    private DateTime $parentalValidation;
    private int $coins;
    // TODO: private PaymentMethod $favoritePaymentMethod;
    private string $role;

    public function __construct() {
    }

    public function __populate(array $data) {
        $this->id = $data['id'];
        $this->email = $data['email'];
        $this->pseudo = $data['pseudo'];
        if (isset($data['avatar'])) $this->avatar = $data['avatar'];
        // $this->birth = $data['birth'];
        $this->password = $data['password'];
        // $this->parentalValidation = $data['parental_validation'];
        $this->coins = $data['coins'];
        // TODO: $this->favoritePaymentMethod = $data['payment_method'];
        if (isset($data['role'])) $this->role = $data['role'];
    }

    public function getId(): int {
        return $this->id;
    }

    public function setId(int $id): void {

    }

    public function getEmail(): string {
        return $this->email;
    }

    public function setEmail(string $email): User {
        $this->email = $email;

        return $this;
    }

    public function getPseudo(): string {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): User {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getAvatar(): string {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): void {

    }

    public function getBirth(): DateTime {
        return $this->birth;
    }

    public function setBirth(DateTime $birth): User {
        $this->birth = $birth;

        return $this;
    }

    public function getPassword(): string {
        return $this->password;
    }

    public function setPassword(string $password): User {
        $this->password = $password;

        return $this;
    }

    public function getParentalValidation(): DateTime {
        return $this->parentalValidation;
    }

    public function setParentalValidation(string $parentalValidation): void {

    }

    public function getCoins(): string {
        return $this->coins;
    }

    public function setCoins(int $coins): void {

    }

    // TODO:

    // public function getFavoritePaymentMethod(): PaymentMethod {
        
    // }

    // public function setFavoritePaymentMethod(PaymentMethod $method): void {

    // }

    public function getRole(): string {
        return $this->role;
    }

    public function setRole(string $role): void {

    }
}
<?php

class User
{
    public function __construct(
        private string $name,
        private string $email,
        private int $age
    ) {}

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function displayUserInfo()
    {
        echo "名前: " . $this->getName() . "\n";
        echo "メール: " . $this->getEmail() . "\n";
        echo "年齢: " . $this->getAge() . "歳\n";
    }
}

// ユーザーインスタンスの作成
$user = new User('山田太郎', 'taro@example.com', 30);
$user->displayUserInfo();

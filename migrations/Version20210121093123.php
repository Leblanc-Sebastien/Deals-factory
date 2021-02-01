<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210121093123 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, user_comment_id INT NOT NULL, deal_comment_id INT NOT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_9474526C5F0EBBFF (user_comment_id), INDEX IDX_9474526C1977DCF6 (deal_comment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE deal (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, link VARCHAR(255) NOT NULL, new_price NUMERIC(7, 2) NOT NULL, old_price NUMERIC(7, 2) NOT NULL, shipping_cost NUMERIC(7, 2) NOT NULL, title VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, categorie VARCHAR(255) NOT NULL, start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL, created_at DATETIME NOT NULL, INDEX IDX_E3FEC116A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, pseudo VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C5F0EBBFF FOREIGN KEY (user_comment_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C1977DCF6 FOREIGN KEY (deal_comment_id) REFERENCES deal (id)');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC116A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C1977DCF6');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C5F0EBBFF');
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC116A76ED395');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE deal');
        $this->addSql('DROP TABLE user');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210121122126 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE deal ADD categorie_id INT NOT NULL');
        $this->addSql('ALTER TABLE deal ADD CONSTRAINT FK_E3FEC116BCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_E3FEC116BCF5E72D ON deal (categorie_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE deal DROP FOREIGN KEY FK_E3FEC116BCF5E72D');
        $this->addSql('DROP INDEX IDX_E3FEC116BCF5E72D ON deal');
        $this->addSql('ALTER TABLE deal DROP categorie_id');
    }
}

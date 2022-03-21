<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211213133958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liaison_periode_type MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE liaison_periode_type DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE liaison_periode_type DROP id, CHANGE liaison_id liaison_id INT NOT NULL, CHANGE periode_id periode_id INT NOT NULL, CHANGE type_id type_id INT NOT NULL');
        $this->addSql('ALTER TABLE liaison_periode_type ADD PRIMARY KEY (liaison_id, periode_id, type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE liaison_periode_type ADD id INT AUTO_INCREMENT NOT NULL, CHANGE liaison_id liaison_id INT DEFAULT NULL, CHANGE periode_id periode_id INT DEFAULT NULL, CHANGE type_id type_id INT DEFAULT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
    }
}

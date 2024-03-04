<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240212092516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE boxe (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE formedeboxe ADD boxe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE formedeboxe ADD CONSTRAINT FK_7512EFDC24BD8F20 FOREIGN KEY (boxe_id) REFERENCES boxe (id)');
        $this->addSql('CREATE INDEX IDX_7512EFDC24BD8F20 ON formedeboxe (boxe_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formedeboxe DROP FOREIGN KEY FK_7512EFDC24BD8F20');
        $this->addSql('DROP TABLE boxe');
        $this->addSql('DROP INDEX IDX_7512EFDC24BD8F20 ON formedeboxe');
        $this->addSql('ALTER TABLE formedeboxe DROP boxe_id');
    }
}

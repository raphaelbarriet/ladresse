<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200618192028 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE days (id INT AUTO_INCREMENT NOT NULL, open_hours_id INT DEFAULT NULL, day_name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_EBE4FC6677CF38C (open_hours_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE opening_time (id INT AUTO_INCREMENT NOT NULL, open INT NOT NULL, closed INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE days ADD CONSTRAINT FK_EBE4FC6677CF38C FOREIGN KEY (open_hours_id) REFERENCES opening_time (id)');
        $this->addSql('ALTER TABLE image CHANGE plat_id plat_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE days DROP FOREIGN KEY FK_EBE4FC6677CF38C');
        $this->addSql('DROP TABLE days');
        $this->addSql('DROP TABLE opening_time');
        $this->addSql('ALTER TABLE image CHANGE plat_id plat_id INT DEFAULT NULL');
    }
}

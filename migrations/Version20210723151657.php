<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210723151657 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE co_pilote_ds (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dmm (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pilote_ds (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pole_ds (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `signal` (id INT AUTO_INCREMENT NOT NULL, source_signal_id INT DEFAULT NULL, pole_ds_id INT DEFAULT NULL, dmm_id INT DEFAULT NULL, pilote_ds_id INT DEFAULT NULL, co_pilote_ds_id INT DEFAULT NULL, statut_signal_id INT DEFAULT NULL, statu_emetteur_id INT DEFAULT NULL, date_creation DATETIME NOT NULL, description LONGTEXT DEFAULT NULL, indication VARCHAR(255) DEFAULT NULL, contexte LONGTEXT DEFAULT NULL, niveau_risque_initial VARCHAR(255) DEFAULT NULL, niveau_risque_final VARCHAR(255) DEFAULT NULL, ana_risque_comment LONGTEXT DEFAULT NULL, propos_reduc_risque LONGTEXT DEFAULT NULL, ref_signal VARCHAR(255) DEFAULT NULL, identifiant_source VARCHAR(255) DEFAULT NULL, INDEX IDX_740C95F5B850D5C5 (source_signal_id), INDEX IDX_740C95F5B9330DD2 (pole_ds_id), INDEX IDX_740C95F513496CEF (dmm_id), INDEX IDX_740C95F5BC73C17A (pilote_ds_id), INDEX IDX_740C95F5B785F2F3 (co_pilote_ds_id), INDEX IDX_740C95F57160D3C9 (statut_signal_id), INDEX IDX_740C95F56CAAC0B (statu_emetteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE source_signal (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut_emetteur (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut_signal (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE `signal` ADD CONSTRAINT FK_740C95F5B850D5C5 FOREIGN KEY (source_signal_id) REFERENCES source_signal (id)');
        $this->addSql('ALTER TABLE `signal` ADD CONSTRAINT FK_740C95F5B9330DD2 FOREIGN KEY (pole_ds_id) REFERENCES pole_ds (id)');
        $this->addSql('ALTER TABLE `signal` ADD CONSTRAINT FK_740C95F513496CEF FOREIGN KEY (dmm_id) REFERENCES dmm (id)');
        $this->addSql('ALTER TABLE `signal` ADD CONSTRAINT FK_740C95F5BC73C17A FOREIGN KEY (pilote_ds_id) REFERENCES pilote_ds (id)');
        $this->addSql('ALTER TABLE `signal` ADD CONSTRAINT FK_740C95F5B785F2F3 FOREIGN KEY (co_pilote_ds_id) REFERENCES co_pilote_ds (id)');
        $this->addSql('ALTER TABLE `signal` ADD CONSTRAINT FK_740C95F57160D3C9 FOREIGN KEY (statut_signal_id) REFERENCES statut_signal (id)');
        $this->addSql('ALTER TABLE `signal` ADD CONSTRAINT FK_740C95F56CAAC0B FOREIGN KEY (statu_emetteur_id) REFERENCES statut_emetteur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `signal` DROP FOREIGN KEY FK_740C95F5B785F2F3');
        $this->addSql('ALTER TABLE `signal` DROP FOREIGN KEY FK_740C95F513496CEF');
        $this->addSql('ALTER TABLE `signal` DROP FOREIGN KEY FK_740C95F5BC73C17A');
        $this->addSql('ALTER TABLE `signal` DROP FOREIGN KEY FK_740C95F5B9330DD2');
        $this->addSql('ALTER TABLE `signal` DROP FOREIGN KEY FK_740C95F5B850D5C5');
        $this->addSql('ALTER TABLE `signal` DROP FOREIGN KEY FK_740C95F56CAAC0B');
        $this->addSql('ALTER TABLE `signal` DROP FOREIGN KEY FK_740C95F57160D3C9');
        $this->addSql('DROP TABLE co_pilote_ds');
        $this->addSql('DROP TABLE dmm');
        $this->addSql('DROP TABLE pilote_ds');
        $this->addSql('DROP TABLE pole_ds');
        $this->addSql('DROP TABLE `signal`');
        $this->addSql('DROP TABLE source_signal');
        $this->addSql('DROP TABLE statut_emetteur');
        $this->addSql('DROP TABLE statut_signal');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210726150531 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classification_rev_dec (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE emetteur_suivi (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE libelle_mesure (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, actif TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mesure (id INT AUTO_INCREMENT NOT NULL, libelle_mesure_id INT DEFAULT NULL, mesure_releve_decision_id INT DEFAULT NULL, description LONGTEXT DEFAULT NULL, date_prev DATETIME DEFAULT NULL, date_realisation DATETIME DEFAULT NULL, INDEX IDX_5F1B6E705CC1CB4A (libelle_mesure_id), INDEX IDX_5F1B6E709847A02D (mesure_releve_decision_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, produit_signal_id INT DEFAULT NULL, denomination VARCHAR(255) DEFAULT NULL, dci VARCHAR(255) DEFAULT NULL, dosage VARCHAR(255) DEFAULT NULL, voie VARCHAR(255) DEFAULT NULL, laboratoire VARCHAR(255) DEFAULT NULL, id_laboratoire VARCHAR(255) DEFAULT NULL, type_procedure VARCHAR(255) DEFAULT NULL, code_cis VARCHAR(255) DEFAULT NULL, code_vu VARCHAR(255) DEFAULT NULL, code_dissier VARCHAR(255) DEFAULT NULL, nom_vu VARCHAR(255) DEFAULT NULL, codex TINYINT(1) DEFAULT NULL, titulaire VARCHAR(255) DEFAULT NULL, id_titulaire VARCHAR(255) DEFAULT NULL, adresse_contact VARCHAR(255) DEFAULT NULL, adresse_compl VARCHAR(255) DEFAULT NULL, code_post VARCHAR(255) DEFAULT NULL, nom_ville VARCHAR(255) DEFAULT NULL, tel_contact VARCHAR(255) DEFAULT NULL, fax_contact VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, adresse_compl_expl VARCHAR(255) DEFAULT NULL, code_post_expl VARCHAR(255) DEFAULT NULL, nom_ville_expl VARCHAR(255) DEFAULT NULL, complement VARCHAR(255) DEFAULT NULL, tel VARCHAR(255) DEFAULT NULL, fax VARCHAR(255) DEFAULT NULL, code_atc VARCHAR(255) DEFAULT NULL, lib_atc VARCHAR(255) DEFAULT NULL, dp VARCHAR(255) DEFAULT NULL, prescription_delivrance VARCHAR(255) DEFAULT NULL, INDEX IDX_29A5EC27545918E7 (produit_signal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE releve_decision (id INT AUTO_INCREMENT NOT NULL, classification_id INT DEFAULT NULL, releve_decision_signal_id INT DEFAULT NULL, date_reu_sig DATETIME NOT NULL, niveau_risque VARCHAR(255) DEFAULT NULL, passage_ctp VARCHAR(255) DEFAULT NULL, passage_rss VARCHAR(255) DEFAULT NULL, info_avis LONGTEXT DEFAULT NULL, INDEX IDX_38F349212A86559F (classification_id), INDEX IDX_38F34921A594C238 (releve_decision_signal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE savu (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(255) DEFAULT NULL, code_cis VARCHAR(255) DEFAULT NULL, code_dossier VARCHAR(255) DEFAULT NULL, nom_vu VARCHAR(255) DEFAULT NULL, num_element VARCHAR(255) DEFAULT NULL, code_substance VARCHAR(255) DEFAULT NULL, num_composant VARCHAR(255) DEFAULT NULL, code_unite_dosage VARCHAR(255) DEFAULT NULL, code_nature VARCHAR(255) DEFAULT NULL, dosage_libra_typo VARCHAR(255) DEFAULT NULL, dosage_libra VARCHAR(255) DEFAULT NULL, lib_court VARCHAR(255) DEFAULT NULL, nom_substance VARCHAR(255) DEFAULT NULL, code_produit VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE suivi (id INT AUTO_INCREMENT NOT NULL, emetteur_suivi_id INT DEFAULT NULL, suivi_signal_id INT DEFAULT NULL, date_suivi DATETIME DEFAULT NULL, description LONGTEXT DEFAULT NULL, INDEX IDX_2EBCCA8FFC83ECC7 (emetteur_suivi_id), INDEX IDX_2EBCCA8FB96EBD65 (suivi_signal_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vuutil (id INT AUTO_INCREMENT NOT NULL, code_vu VARCHAR(255) NOT NULL, code_cis VARCHAR(255) DEFAULT NULL, code_dossier VARCHAR(255) DEFAULT NULL, nom_vu VARCHAR(255) DEFAULT NULL, dbo_autorisation_lib_abr VARCHAR(255) DEFAULT NULL, dbo_classe_atc_lib_abr VARCHAR(255) DEFAULT NULL, dbo_classe_atc_lib_court VARCHAR(255) DEFAULT NULL, lib_court VARCHAR(255) DEFAULT NULL, code_contact VARCHAR(255) DEFAULT NULL, nom_contact_libra VARCHAR(255) DEFAULT NULL, adresse_contact VARCHAR(255) DEFAULT NULL, adresse_compl VARCHAR(255) DEFAULT NULL, code_post VARCHAR(255) DEFAULT NULL, nom_ville VARCHAR(255) DEFAULT NULL, tel_contact VARCHAR(255) DEFAULT NULL, fax_contact VARCHAR(255) DEFAULT NULL, dbo_pays_lib_court VARCHAR(255) DEFAULT NULL, dbo_statut_speci_lib_abr VARCHAR(255) DEFAULT NULL, statut_abrege VARCHAR(255) DEFAULT NULL, code_acteur VARCHAR(255) DEFAULT NULL, code_tigre VARCHAR(255) DEFAULT NULL, nom_acteur_long VARCHAR(255) DEFAULT NULL, adresse VARCHAR(255) DEFAULT NULL, adresse_compl_expl VARCHAR(255) DEFAULT NULL, code_post_expl VARCHAR(255) DEFAULT NULL, nom_ville_expl VARCHAR(255) DEFAULT NULL, complement VARCHAR(255) DEFAULT NULL, tel VARCHAR(255) DEFAULT NULL, fax VARCHAR(255) DEFAULT NULL, dbo_pays_lib_abr VARCHAR(255) DEFAULT NULL, code_produit VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mesure ADD CONSTRAINT FK_5F1B6E705CC1CB4A FOREIGN KEY (libelle_mesure_id) REFERENCES libelle_mesure (id)');
        $this->addSql('ALTER TABLE mesure ADD CONSTRAINT FK_5F1B6E709847A02D FOREIGN KEY (mesure_releve_decision_id) REFERENCES releve_decision (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27545918E7 FOREIGN KEY (produit_signal_id) REFERENCES `signal` (id)');
        $this->addSql('ALTER TABLE releve_decision ADD CONSTRAINT FK_38F349212A86559F FOREIGN KEY (classification_id) REFERENCES classification_rev_dec (id)');
        $this->addSql('ALTER TABLE releve_decision ADD CONSTRAINT FK_38F34921A594C238 FOREIGN KEY (releve_decision_signal_id) REFERENCES `signal` (id)');
        $this->addSql('ALTER TABLE suivi ADD CONSTRAINT FK_2EBCCA8FFC83ECC7 FOREIGN KEY (emetteur_suivi_id) REFERENCES emetteur_suivi (id)');
        $this->addSql('ALTER TABLE suivi ADD CONSTRAINT FK_2EBCCA8FB96EBD65 FOREIGN KEY (suivi_signal_id) REFERENCES `signal` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE releve_decision DROP FOREIGN KEY FK_38F349212A86559F');
        $this->addSql('ALTER TABLE suivi DROP FOREIGN KEY FK_2EBCCA8FFC83ECC7');
        $this->addSql('ALTER TABLE mesure DROP FOREIGN KEY FK_5F1B6E705CC1CB4A');
        $this->addSql('ALTER TABLE mesure DROP FOREIGN KEY FK_5F1B6E709847A02D');
        $this->addSql('DROP TABLE classification_rev_dec');
        $this->addSql('DROP TABLE emetteur_suivi');
        $this->addSql('DROP TABLE libelle_mesure');
        $this->addSql('DROP TABLE mesure');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE releve_decision');
        $this->addSql('DROP TABLE savu');
        $this->addSql('DROP TABLE suivi');
        $this->addSql('DROP TABLE vuutil');
    }
}

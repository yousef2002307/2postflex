<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Tests\Model\Proprete;

use DateTime;
use Exception;
use WBW\Library\Quadratus\Model\Proprete\CdeClientEntete;
use WBW\Library\Quadratus\Tests\AbstractTestCase;

/**
 * Cde client entete test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Tests\Model\Proprete
 */
class CdeClientEnteteTest extends AbstractTestCase {

    /**
     * Tests setBtq()
     *
     * @return void
     */
    public function testSetBtq(): void {

        $obj = new CdeClientEntete();

        $obj->setBtq("btq");
        $this->assertEquals("btq", $obj->getBtq());
    }

    /**
     * Tests setBtq2()
     *
     * @return void
     */
    public function testSetBtq2(): void {

        $obj = new CdeClientEntete();

        $obj->setBtq2("btq2");
        $this->assertEquals("btq2", $obj->getBtq2());
    }

    /**
     * Tests setBureauDistributeur()
     *
     * @return void
     */
    public function testSetBureauDistributeur(): void {

        $obj = new CdeClientEntete();

        $obj->setBureauDistributeur("bureauDistributeur");
        $this->assertEquals("bureauDistributeur", $obj->getBureauDistributeur());
    }

    /**
     * Tests setBureauDistributeur2()
     *
     * @return void
     */
    public function testSetBureauDistributeur2(): void {

        $obj = new CdeClientEntete();

        $obj->setBureauDistributeur2("bureauDistributeur2");
        $this->assertEquals("bureauDistributeur2", $obj->getBureauDistributeur2());
    }

    /**
     * Tests setCodeAffaire()
     *
     * @return void
     */
    public function testSetCodeAffaire(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeAffaire("codeAffaire");
        $this->assertEquals("codeAffaire", $obj->getCodeAffaire());
    }

    /**
     * Tests setCodeChantier()
     *
     * @return void
     */
    public function testSetCodeChantier(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeChantier("codeChantier");
        $this->assertEquals("codeChantier", $obj->getCodeChantier());
    }

    /**
     * Tests setCodeClient()
     *
     * @return void
     */
    public function testSetCodeClient(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeClient("codeClient");
        $this->assertEquals("codeClient", $obj->getCodeClient());
    }

    /**
     * Tests setCodeDevise()
     *
     * @return void
     */
    public function testSetCodeDevise(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeDevise("codeDevise");
        $this->assertEquals("codeDevise", $obj->getCodeDevise());
    }

    /**
     * Tests setCodeOfficielCommune()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeOfficielCommune("codeOfficielCommune");
        $this->assertEquals("codeOfficielCommune", $obj->getCodeOfficielCommune());
    }

    /**
     * Tests setCodeOfficielCommune2()
     *
     * @return void
     */
    public function testSetCodeOfficielCommune2(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeOfficielCommune2("codeOfficielCommune2");
        $this->assertEquals("codeOfficielCommune2", $obj->getCodeOfficielCommune2());
    }

    /**
     * Tests setCodePostal()
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new CdeClientEntete();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests setCodePostal2()
     *
     * @return void
     */
    public function testSetCodePostal2(): void {

        $obj = new CdeClientEntete();

        $obj->setCodePostal2("codePostal2");
        $this->assertEquals("codePostal2", $obj->getCodePostal2());
    }

    /**
     * Tests setCodeReglement()
     *
     * @return void
     */
    public function testSetCodeReglement(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeReglement("codeReglement");
        $this->assertEquals("codeReglement", $obj->getCodeReglement());
    }

    /**
     * Tests setCodeRegroupement()
     *
     * @return void
     */
    public function testSetCodeRegroupement(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeRegroupement("codeRegroupement");
        $this->assertEquals("codeRegroupement", $obj->getCodeRegroupement());
    }

    /**
     * Tests setCodeRepresentant()
     *
     * @return void
     */
    public function testSetCodeRepresentant(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeRepresentant("codeRepresentant");
        $this->assertEquals("codeRepresentant", $obj->getCodeRepresentant());
    }

    /**
     * Tests setCodeTva()
     *
     * @return void
     */
    public function testSetCodeTva(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeTva("codeTva");
        $this->assertEquals("codeTva", $obj->getCodeTva());
    }

    /**
     * Tests setCodeVentilCompta()
     *
     * @return void
     */
    public function testSetCodeVentilCompta(): void {

        $obj = new CdeClientEntete();

        $obj->setCodeVentilCompta("codeVentilCompta");
        $this->assertEquals("codeVentilCompta", $obj->getCodeVentilCompta());
    }

    /**
     * Tests setComplement()
     *
     * @return void
     */
    public function testSetComplement(): void {

        $obj = new CdeClientEntete();

        $obj->setComplement("complement");
        $this->assertEquals("complement", $obj->getComplement());
    }

    /**
     * Tests setComplement2()
     *
     * @return void
     */
    public function testSetComplement2(): void {

        $obj = new CdeClientEntete();

        $obj->setComplement2("complement2");
        $this->assertEquals("complement2", $obj->getComplement2());
    }

    /**
     * Tests setDateCreation()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateCreation(): void {

        // Set a Date/time mock.
        $dateCreation = new DateTime("2018-09-10");

        $obj = new CdeClientEntete();

        $obj->setDateCreation($dateCreation);
        $this->assertSame($dateCreation, $obj->getDateCreation());
    }

    /**
     * Tests setDateEcheance()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateEcheance(): void {

        // Set a Date/time mock.
        $dateEcheance = new DateTime("2018-09-10");

        $obj = new CdeClientEntete();

        $obj->setDateEcheance($dateEcheance);
        $this->assertSame($dateEcheance, $obj->getDateEcheance());
    }

    /**
     * Tests setDateModification()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateModification(): void {

        // Set a Date/time mock.
        $dateModification = new DateTime("2018-09-10");

        $obj = new CdeClientEntete();

        $obj->setDateModification($dateModification);
        $this->assertSame($dateModification, $obj->getDateModification());
    }

    /**
     * Tests setDatePiece()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDatePiece(): void {

        // Set a Date/time mock.
        $datePiece = new DateTime("2018-09-10");

        $obj = new CdeClientEntete();

        $obj->setDatePiece($datePiece);
        $this->assertSame($datePiece, $obj->getDatePiece());
    }

    /**
     * Tests setDateReceptionPrevue()
     *
     * @return void
     * @throws Exception Throws an exception if an error occurs.
     */
    public function testSetDateReceptionPrevue(): void {

        // Set a Date/time mock.
        $dateReceptionPrevue = new DateTime("2018-09-10");

        $obj = new CdeClientEntete();

        $obj->setDateReceptionPrevue($dateReceptionPrevue);
        $this->assertSame($dateReceptionPrevue, $obj->getDateReceptionPrevue());
    }

    /**
     * Tests setEcheanceForcee()
     *
     * @return void
     */
    public function testSetEcheanceForcee(): void {

        $obj = new CdeClientEntete();

        $obj->setEcheanceForcee(true);
        $this->assertEquals(true, $obj->getEcheanceForcee());
    }

    /**
     * Tests setEdition()
     *
     * @return void
     */
    public function testSetEdition(): void {

        $obj = new CdeClientEntete();

        $obj->setEdition(10);
        $this->assertEquals(10, $obj->getEdition());
    }

    /**
     * Tests setFactureEuros()
     *
     * @return void
     */
    public function testSetFactureEuros(): void {

        $obj = new CdeClientEntete();

        $obj->setFactureEuros(true);
        $this->assertEquals(true, $obj->getFactureEuros());
    }

    /**
     * Tests setMontantAcompte()
     *
     * @return void
     */
    public function testSetMontantAcompte(): void {

        $obj = new CdeClientEntete();

        $obj->setMontantAcompte(10.092018);
        $this->assertEquals(10.092018, $obj->getMontantAcompte());
    }

    /**
     * Tests setNbColis()
     *
     * @return void
     */
    public function testSetNbColis(): void {

        $obj = new CdeClientEntete();

        $obj->setNbColis(10);
        $this->assertEquals(10, $obj->getNbColis());
    }

    /**
     * Tests setNoPiece()
     *
     * @return void
     */
    public function testSetNoPiece(): void {

        $obj = new CdeClientEntete();

        $obj->setNoPiece("noPiece");
        $this->assertEquals("noPiece", $obj->getNoPiece());
    }

    /**
     * Tests setNom()
     *
     * @return void
     */
    public function testSetNom(): void {

        $obj = new CdeClientEntete();

        $obj->setNom("nom");
        $this->assertEquals("nom", $obj->getNom());
    }

    /**
     * Tests setNom2()
     *
     * @return void
     */
    public function testSetNom2(): void {

        $obj = new CdeClientEntete();

        $obj->setNom2("nom2");
        $this->assertEquals("nom2", $obj->getNom2());
    }

    /**
     * Tests setNomSuite()
     *
     * @return void
     */
    public function testSetNomSuite(): void {

        $obj = new CdeClientEntete();

        $obj->setNomSuite("nomSuite");
        $this->assertEquals("nomSuite", $obj->getNomSuite());
    }

    /**
     * Tests setNomSuite2()
     *
     * @return void
     */
    public function testSetNomSuite2(): void {

        $obj = new CdeClientEntete();

        $obj->setNomSuite2("nomSuite2");
        $this->assertEquals("nomSuite2", $obj->getNomSuite2());
    }

    /**
     * Tests setNomVille()
     *
     * @return void
     */
    public function testSetNomVille(): void {

        $obj = new CdeClientEntete();

        $obj->setNomVille("nomVille");
        $this->assertEquals("nomVille", $obj->getNomVille());
    }

    /**
     * Tests setNomVille2()
     *
     * @return void
     */
    public function testSetNomVille2(): void {

        $obj = new CdeClientEntete();

        $obj->setNomVille2("nomVille2");
        $this->assertEquals("nomVille2", $obj->getNomVille2());
    }

    /**
     * Tests setNomVoie()
     *
     * @return void
     */
    public function testSetNomVoie(): void {

        $obj = new CdeClientEntete();

        $obj->setNomVoie("nomVoie");
        $this->assertEquals("nomVoie", $obj->getNomVoie());
    }

    /**
     * Tests setNomVoie2()
     *
     * @return void
     */
    public function testSetNomVoie2(): void {

        $obj = new CdeClientEntete();

        $obj->setNomVoie2("nomVoie2");
        $this->assertEquals("nomVoie2", $obj->getNomVoie2());
    }

    /**
     * Tests setNombreEcheances()
     *
     * @return void
     */
    public function testSetNombreEcheances(): void {

        $obj = new CdeClientEntete();

        $obj->setNombreEcheances(10);
        $this->assertEquals(10, $obj->getNombreEcheances());
    }

    /**
     * Tests setNumVoie()
     *
     * @return void
     */
    public function testSetNumVoie(): void {

        $obj = new CdeClientEntete();

        $obj->setNumVoie("numVoie");
        $this->assertEquals("numVoie", $obj->getNumVoie());
    }

    /**
     * Tests setNumVoie2()
     *
     * @return void
     */
    public function testSetNumVoie2(): void {

        $obj = new CdeClientEntete();

        $obj->setNumVoie2("numVoie2");
        $this->assertEquals("numVoie2", $obj->getNumVoie2());
    }

    /**
     * Tests setNumeroPj()
     *
     * @return void
     */
    public function testSetNumeroPj(): void {

        $obj = new CdeClientEntete();

        $obj->setNumeroPj(10);
        $this->assertEquals(10, $obj->getNumeroPj());
    }

    /**
     * Tests setPaiementDepartLe()
     *
     * @return void
     */
    public function testSetPaiementDepartLe(): void {

        $obj = new CdeClientEntete();

        $obj->setPaiementDepartLe(10);
        $this->assertEquals(10, $obj->getPaiementDepartLe());
    }

    /**
     * Tests setPaiementLe()
     *
     * @return void
     */
    public function testSetPaiementLe(): void {

        $obj = new CdeClientEntete();

        $obj->setPaiementLe(10);
        $this->assertEquals(10, $obj->getPaiementLe());
    }

    /**
     * Tests setPaiementNombreDeJours()
     *
     * @return void
     */
    public function testSetPaiementNombreDeJours(): void {

        $obj = new CdeClientEntete();

        $obj->setPaiementNombreDeJours(10);
        $this->assertEquals(10, $obj->getPaiementNombreDeJours());
    }

    /**
     * Tests setPoids()
     *
     * @return void
     */
    public function testSetPoids(): void {

        $obj = new CdeClientEntete();

        $obj->setPoids(10.092018);
        $this->assertEquals(10.092018, $obj->getPoids());
    }

    /**
     * Tests setReference1()
     *
     * @return void
     */
    public function testSetReference1(): void {

        $obj = new CdeClientEntete();

        $obj->setReference1("reference1");
        $this->assertEquals("reference1", $obj->getReference1());
    }

    /**
     * Tests setReference2()
     *
     * @return void
     */
    public function testSetReference2(): void {

        $obj = new CdeClientEntete();

        $obj->setReference2("reference2");
        $this->assertEquals("reference2", $obj->getReference2());
    }

    /**
     * Tests setReference3()
     *
     * @return void
     */
    public function testSetReference3(): void {

        $obj = new CdeClientEntete();

        $obj->setReference3("reference3");
        $this->assertEquals("reference3", $obj->getReference3());
    }

    /**
     * Tests setReference4()
     *
     * @return void
     */
    public function testSetReference4(): void {

        $obj = new CdeClientEntete();

        $obj->setReference4("reference4");
        $this->assertEquals("reference4", $obj->getReference4());
    }

    /**
     * Tests setRemisePied()
     *
     * @return void
     */
    public function testSetRemisePied(): void {

        $obj = new CdeClientEntete();

        $obj->setRemisePied(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied());
    }

    /**
     * Tests setRemisePied2()
     *
     * @return void
     */
    public function testSetRemisePied2(): void {

        $obj = new CdeClientEntete();

        $obj->setRemisePied2(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied2());
    }

    /**
     * Tests setRemisePied3()
     *
     * @return void
     */
    public function testSetRemisePied3(): void {

        $obj = new CdeClientEntete();

        $obj->setRemisePied3(10.092018);
        $this->assertEquals(10.092018, $obj->getRemisePied3());
    }

    /**
     * Tests setSaisirAdresse()
     *
     * @return void
     */
    public function testSetSaisirAdresse(): void {

        $obj = new CdeClientEntete();

        $obj->setSaisirAdresse(true);
        $this->assertEquals(true, $obj->getSaisirAdresse());
    }

    /**
     * Tests setSaisirAdresseLivraison()
     *
     * @return void
     */
    public function testSetSaisirAdresseLivraison(): void {

        $obj = new CdeClientEntete();

        $obj->setSaisirAdresseLivraison(true);
        $this->assertEquals(true, $obj->getSaisirAdresseLivraison());
    }

    /**
     * Tests setSoumisEscompte()
     *
     * @return void
     */
    public function testSetSoumisEscompte(): void {

        $obj = new CdeClientEntete();

        $obj->setSoumisEscompte(true);
        $this->assertEquals(true, $obj->getSoumisEscompte());
    }

    /**
     * Tests setSoumisTaxe1()
     *
     * @return void
     */
    public function testSetSoumisTaxe1(): void {

        $obj = new CdeClientEntete();

        $obj->setSoumisTaxe1(true);
        $this->assertEquals(true, $obj->getSoumisTaxe1());
    }

    /**
     * Tests setSoumisTaxe2()
     *
     * @return void
     */
    public function testSetSoumisTaxe2(): void {

        $obj = new CdeClientEntete();

        $obj->setSoumisTaxe2(true);
        $this->assertEquals(true, $obj->getSoumisTaxe2());
    }

    /**
     * Tests setSoumisTaxe3()
     *
     * @return void
     */
    public function testSetSoumisTaxe3(): void {

        $obj = new CdeClientEntete();

        $obj->setSoumisTaxe3(true);
        $this->assertEquals(true, $obj->getSoumisTaxe3());
    }

    /**
     * Tests setTauxCommission()
     *
     * @return void
     */
    public function testSetTauxCommission(): void {

        $obj = new CdeClientEntete();

        $obj->setTauxCommission(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxCommission());
    }

    /**
     * Tests setTauxDevise()
     *
     * @return void
     */
    public function testSetTauxDevise(): void {

        $obj = new CdeClientEntete();

        $obj->setTauxDevise(10.092018);
        $this->assertEquals(10.092018, $obj->getTauxDevise());
    }

    /**
     * Tests setTransfert()
     *
     * @return void
     */
    public function testSetTransfert(): void {

        $obj = new CdeClientEntete();

        $obj->setTransfert(10);
        $this->assertEquals(10, $obj->getTransfert());
    }

    /**
     * Tests setTransporteur()
     *
     * @return void
     */
    public function testSetTransporteur(): void {

        $obj = new CdeClientEntete();

        $obj->setTransporteur("transporteur");
        $this->assertEquals("transporteur", $obj->getTransporteur());
    }

    /**
     * Tests setTxEscompteVente()
     *
     * @return void
     */
    public function testSetTxEscompteVente(): void {

        $obj = new CdeClientEntete();

        $obj->setTxEscompteVente(10.092018);
        $this->assertEquals(10.092018, $obj->getTxEscompteVente());
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new CdeClientEntete();

        $this->assertNull($obj->getBtq());
        $this->assertNull($obj->getBtq2());
        $this->assertNull($obj->getBureauDistributeur());
        $this->assertNull($obj->getBureauDistributeur2());
        $this->assertNull($obj->getCodeAffaire());
        $this->assertNull($obj->getCodeChantier());
        $this->assertNull($obj->getCodeClient());
        $this->assertNull($obj->getCodeDevise());
        $this->assertNull($obj->getCodeOfficielCommune());
        $this->assertNull($obj->getCodeOfficielCommune2());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodePostal2());
        $this->assertNull($obj->getCodeReglement());
        $this->assertNull($obj->getCodeRegroupement());
        $this->assertNull($obj->getCodeRepresentant());
        $this->assertNull($obj->getCodeTva());
        $this->assertNull($obj->getCodeVentilCompta());
        $this->assertNull($obj->getComplement());
        $this->assertNull($obj->getComplement2());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateEcheance());
        $this->assertNull($obj->getDateModification());
        $this->assertNull($obj->getDatePiece());
        $this->assertNull($obj->getDateReceptionPrevue());
        $this->assertNull($obj->getEcheanceForcee());
        $this->assertNull($obj->getEdition());
        $this->assertNull($obj->getFactureEuros());
        $this->assertNull($obj->getMontantAcompte());
        $this->assertNull($obj->getNbColis());
        $this->assertNull($obj->getNoPiece());
        $this->assertNull($obj->getNom());
        $this->assertNull($obj->getNom2());
        $this->assertNull($obj->getNomSuite());
        $this->assertNull($obj->getNomSuite2());
        $this->assertNull($obj->getNomVille());
        $this->assertNull($obj->getNomVille2());
        $this->assertNull($obj->getNomVoie());
        $this->assertNull($obj->getNomVoie2());
        $this->assertNull($obj->getNombreEcheances());
        $this->assertNull($obj->getNumVoie());
        $this->assertNull($obj->getNumVoie2());
        $this->assertNull($obj->getNumeroPj());
        $this->assertNull($obj->getPaiementDepartLe());
        $this->assertNull($obj->getPaiementLe());
        $this->assertNull($obj->getPaiementNombreDeJours());
        $this->assertNull($obj->getPoids());
        $this->assertNull($obj->getReference1());
        $this->assertNull($obj->getReference2());
        $this->assertNull($obj->getReference3());
        $this->assertNull($obj->getReference4());
        $this->assertNull($obj->getRemisePied());
        $this->assertNull($obj->getRemisePied2());
        $this->assertNull($obj->getRemisePied3());
        $this->assertNull($obj->getSaisirAdresse());
        $this->assertNull($obj->getSaisirAdresseLivraison());
        $this->assertNull($obj->getSoumisEscompte());
        $this->assertNull($obj->getSoumisTaxe1());
        $this->assertNull($obj->getSoumisTaxe2());
        $this->assertNull($obj->getSoumisTaxe3());
        $this->assertNull($obj->getTauxCommission());
        $this->assertNull($obj->getTauxDevise());
        $this->assertNull($obj->getTransfert());
        $this->assertNull($obj->getTransporteur());
        $this->assertNull($obj->getTxEscompteVente());
    }
}

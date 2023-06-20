<?php

namespace Database\Seeders;

use App\Models\HistoricalService;
use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $services = [
            ['name' => '17-ALFA HIDROXIPROGESTERONA (17-OHP)', 'public_cost' => 350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'AC. ANTI - PAROTIDITIS IGG E IGM', 'public_cost' => 890, 'request' => 'Ayuno de 8 horas. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'AC. ANTI-ANTIGENO DE VIRUS DE SUPERFICIE HEPATITIS ""B""', 'public_cost' => 550, 'request' => 'Ayuno de 8 horas. 

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'ACETONA EN SANGRE', 'public_cost' => 380, 'request' => '
Ayuno de 8 horas

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'ACIDO FOLICO Y VITAMINA B12', 'public_cost' => 670, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ÁCIDO LÁCTICO ', 'public_cost' => 670, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACIDO METILMALONICO EN SANGRE   ', 'public_cost' => 3590, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'ACIDO MICOFENOLICO ', 'public_cost' => 1700, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ACIDO URICO EN ORINA (MUESTRA ALEATORIA) ', 'public_cost' => 160, 'request' => 'Muestra de orina de cualquier hora del día.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACIDO URICO EN ORINA DE 24 HRS.', 'public_cost' => 160, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACIDO URICO SERICO ', 'public_cost' => 130, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ÁCIDO ÚRICO SÉRICO ', 'public_cost' => 130, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACIDO VALPROICO ', 'public_cost' => 340, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACIDO VANILMANDELICO EN ORINA DE 24 HRS.', 'public_cost' => 860, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACIDOS BILIARES TOTALES', 'public_cost' => 1650, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ACS. ANTI BRUCELLA IgM', 'public_cost' => 560, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ACS. ANTI ENDOMISIO (IgA)', 'public_cost' => 1230, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'ACS. ANTI-21 HIDROXILASA ', 'public_cost' => 3100, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ACS. ANTI-ADAMTS 13', 'public_cost' => 2450, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ACS. ANTI-ANTIGENO Core HEPATITIS ""B"" (IgG e IgM)', 'public_cost' => 630, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-ANTIGENO Core HEPATITIS ""B"" (IgM)', 'public_cost' => 540, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-ANTIGENOS AVIARIOS ', 'public_cost' => 620, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-ASPERGILLUS (IgG, IgM) ', 'public_cost' => 1300, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ACS. ANTI-BETA 2 GLICOPROTEINA (IgG, IgM) ', 'public_cost' => 1480, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-BORDETELLA PERTUSSIS (IgG, IgA)', 'public_cost' => 2170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'ACS. ANTI-BORRELIA BURGDORFERI', 'public_cost' => 1050, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 7 días hábiles.', 'process_time' => 7, 'available_outside' => true],
            ['name' => 'ACS. ANTI-BRUCELLA (2 MERCAPTO-ETANOL) ', 'public_cost' => 860, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-BRUCELLA (IgG, IgA, IgM)', 'public_cost' => 3700, 'request' => 'Ayuno de 8 horas

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ACS. ANTI-BRUCELLA ', 'public_cost' => 860, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CARDIOLIPINAS', 'public_cost' => 760, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CENTROMERO ', 'public_cost' => 590, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CHLAMYDIA TRACHOMATIS IgA, IgG, IgM', 'public_cost' => 2440, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CHLAMYDIA TRACHOMATIS IgG ', 'public_cost' => 400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CHLAMYDIA TRACHOMATIS IgM ', 'public_cost' => 440, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CHLAMYDIA TRACHOMATIS  ', 'public_cost' => 2440, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CISTICERCO TOTALES EN LCR (ELISA)', 'public_cost' => 600, 'request' => 'no especiales 

Entrega de resultados: 7 días hábiles.', 'process_time' => 7, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CITOMEGALOVIRUS (ACS. ANTI-CMV)', 'public_cost' => 460, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CITOPLASMA DE NEUTROFILOS (ACS. ANTI-ANCA)', 'public_cost' => 890, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-CITOPLASMA DE NEUTROFILOS (P-ANCA C-ANCA)', 'public_cost' => 890, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-COCCIDIOIDES IMMITIS (IgG, IgM) ', 'public_cost' => 3280, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 11 días hábiles.', 'process_time' => 11, 'available_outside' => true],
            ['name' => 'ACS. ANTI-DENGUE IgG e IgM + Ag. NS1', 'public_cost' => 1430, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-DESCARBOXILASA DEL ACIDO GLUTAMICO (ACS. ANTI-GAD)', 'public_cost' => 1050, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 14 días hábiles.', 'process_time' => 14, 'available_outside' => true],
            ['name' => 'ACS. ANTI-DNA (DOBLE CADENA) ', 'public_cost' => 550, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-DNA DE DOBLE CADENA (ACS. ANTI-DNA)', 'public_cost' => 550, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días naturales.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-ENA', 'public_cost' => 1230, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-ESPERMATOZOIDES (IgG, IgA, IgM)', 'public_cost' => 1680, 'request' => 'Comunicarse al laboratorio para solicitar indicaciones.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-FOSFOLIPIDOS IgG e IgM', 'public_cost' => 760, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-GIARDIA LAMBLIA  ', 'public_cost' => 1650, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ACS. ANTI-GLIADINA', 'public_cost' => 910, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HELICOBACTER PYLORI (IGA)', 'public_cost' => 510, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HELICOBACTER PYLORI (IgG)', 'public_cost' => 490, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HELICOBACTER PYLORI    ', 'public_cost' => 1510, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HELICOBATER PYLORI (IgM)', 'public_cost' => 510, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HEPATITIS ""A"" (IgG) (ACS. ANTI-VHA IgG)', 'public_cost' => 610, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HEPATITIS ""A"" (IgM ) (ACS. ANTI-VHA IgM)', 'public_cost' => 590, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HEPATITIS ""C"" (ACS. ANTI-VHC)', 'public_cost' => 630, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HERPES SIMPLEX 1 Y 2 (ACS. ANTI-VHS I Y II)', 'public_cost' => 940, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.
Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HISTONAS ', 'public_cost' => 750, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 7 días hábiles', 'process_time' => 7, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HISTOPLASMA CAPSULATUM (IgM)', 'public_cost' => 950, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HIV (1&2) Y ANTIGENO p24 (HIV)', 'public_cost' => 350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. ANTI-HIV (1&2) Y ANTIGENO p24', 'public_cost' => 350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. ANTI-Jo1 ', 'public_cost' => 610, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'ACS. ANTI-LEPTOSPIRA', 'public_cost' => 690, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ACS. ANTI-LKM (MICROSOMALES DE HIGADO Y RIÑON) (LKM)', 'public_cost' => 680, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ACS. ANTI-MIELINA EN L.C.R.', 'public_cost' => 19400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 14 días hábiles.', 'process_time' => 14, 'available_outside' => true],
            ['name' => 'ACS. ANTI-MITOCONDRIA (ACS. ANTI-AMA (AAM))', 'public_cost' => 690, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Entregar la muesta en un recipiente estéril.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-MUSCULO LISO (ACS- ANTI-SMA)', 'public_cost' => 670, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'ACS. ANTI-MYCOBACTERIUM TUBERCULOSIS (IgG e IgM) ', 'public_cost' => 1350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'ACS. ANTI-MYCOBACTERIUM TUBERCULOSIS  ', 'public_cost' => 1350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'Acs. Anti-Mycoplasma pneumoniae IgG e IgM', 'public_cost' => 840, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ACS. ANTI-NEUROMIELITIS OPTICA (AQUAPORINA-4, IgG)', 'public_cost' => 4340, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-NUCLEARES ', 'public_cost' => 740, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-PARVOVIRUS B-19', 'public_cost' => 1150, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ACS. ANTI-PEPTIDO CICLICO CITRULINADO (ACS. ANTI-CCP)', 'public_cost' => 850, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-PLAQUETAS ', 'public_cost' => 1110, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-RECEPTORES DE TSH', 'public_cost' => 1790, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ACS. ANTI-RICKETTSIAS IgG, IgM FIEBRE Q', 'public_cost' => 1640, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ACS. ANTI-RNA POLIMERASA I / II / III', 'public_cost' => 1540, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ACS. ANTI-RNP  ', 'public_cost' => 540, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-RUBEOLA', 'public_cost' => 690, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-RUBEOLA IgM ', 'public_cost' => 420, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-SALMONELLA ', 'public_cost' => 2980, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-SARAMPION (IgG, IgM) ', 'public_cost' => 690, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ACS. ANTI-SARS-COV-2  ', 'public_cost' => 800, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. ANTI-SCL/70 ', 'public_cost' => 570, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ACS. ANTI-SMITH (ACS. ANTI-SM)', 'public_cost' => 530, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-SSA, ANTI-SSB (RO/LA)', 'public_cost' => 1080, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-TIROIDEOS', 'public_cost' => 870, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. ANTI-TOXOPLASMA', 'public_cost' => 740, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-TOXOPLASMA (IgM) ', 'public_cost' => 420, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. ANTI-TRANSGLUTAMINASA TISULAR (ACS. tTG )', 'public_cost' => 1290, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'ACS. ANTI-TREPONEMA (CONFIRMACION)', 'public_cost' => 580, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'ACS. ANTI-TREPONEMA ', 'public_cost' => 170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. ANTI-VARICELA ZOSTER', 'public_cost' => 1380, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'ACS. ANTI-VARICELA ZOSTER (IgG)  ', 'public_cost' => 540, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'ACS. ANTI-VIRUS EPSTEIN BARR (ACS. ANTI-VEB)', 'public_cost' => 1680, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-VIRUS HERPES TIPO 2 (IgG, IgM)', 'public_cost' => 460, 'request' => 'no especiales 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. ANTI-VIRUS SARS-CoV-2 (IgM, IgG)', 'public_cost' => 800, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. CITOMEGALOVIRUS IgM', 'public_cost' => 460, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ACS. EPSTEIN BARR IgM', 'public_cost' => 390, 'request' => 'no especiales 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ACS. HETEROFILOS ', 'public_cost' => 400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ACS. RNA POLIMERASA III', 'public_cost' => 1540, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ACTIVIDAD DE PROTEINA ADAMTS 13', 'public_cost' => 5900, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ADENOSIN DEAMINASA ', 'public_cost' => 770, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'Ag. DE SUPERFICIE DE HEPATITIS ""B"" (AG VHB)', 'public_cost' => 430, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ALANINO AMINO TRANSFERASA (ALT/TGP)', 'public_cost' => 170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ALBUMINA EN LIQUIDO BIOLOGICO  ', 'public_cost' => 160, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ALBUMINA EN ORINA DE 24 HORAS  ', 'public_cost' => 620, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 
 
Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ALBUMINA EN ORINA  ', 'public_cost' => 620, 'request' => 'Muestra de orina de cualquier hora del día.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ALBUMINA SERICA  ', 'public_cost' => 160, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ALBÚMINA SÉRICA  ', 'public_cost' => 160, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ALCOHOL ETILICO EN ORINA ', 'public_cost' => 350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Solo se toma de lunes a viernes antes de las 12:00 horas.

Entrega de resultados: 3 días hábiles.
', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ALCOHOL ETILICO EN SANGRE ', 'public_cost' => 350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial, toma de muestra de lunes a viernes antes de las 12:00 p.m.

Entrega de resultados: 3 días hábiles.
', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ALDOLASA ', 'public_cost' => 330, 'request' => 'Para estos estudios se requiere ayuno de: 6 horas.

Entrega de resultados: 3 días hábiles.
', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ALDOSTERONA EN ORINA DE 24 HORAS', 'public_cost' => 670, 'request' => 'Muestra de orina de 24 horas en recipiente proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 24 horas de recolección.)

Entrega de resultados: 6 días hábiles', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'ALDOSTERONA ', 'public_cost' => 670, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ALDOSTERONA/ACTIVIDAD DE RENINA', 'public_cost' => 2700, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ALFA 1 ANTITRIPSINA ', 'public_cost' => 760, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ALFAFETOPROTEINA ', 'public_cost' => 520, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

EEntrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ALPRAZOLAM (XANAX)', 'public_cost' => 500, 'request' => 'Tomar la muestra antes de la dosis del medicamento. Ayuno de 8 horas.

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'ALUMINIO EN SANGRE', 'public_cost' => 660, 'request' => 'No especiales.

Entrega de resultados: 14 días habiles', 'process_time' => 14, 'available_outside' => true],
            ['name' => 'AMIBA EN FRESCO Y CITOLOGIA FECAL', 'public_cost' => 290, 'request' => 'Recolectar muestra de heces del tamaño de una nuez en un recipiente estéril. 
En caso de recolectar en pañal se debe traspasar la muestra al recipiente estéril. 
Evitar que se mezcle con orina.
Traer en un lapso máximo de 30 minutos posterior a la recolección.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'AMIBA EN FRESCO, pH Y AZUCARES REDUCTORES EN HECES', 'public_cost' => 420, 'request' => 'Recolectar muestra de heces del tamaño de una nuez en un recipiente estéril. 
En caso de recolectar en pañal se debe traspasar la muestra al recipiente estéril. 
Evitar que se mezcle con orina.
Traer en un lapso máximo de 30 minutos posterior a la recolección.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'AMILASA SÉRICA  ', 'public_cost' => 290, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'AMONIO PLASMÁTICO', 'public_cost' => 250, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANALISIS COMPLETO DE ORINA (EXAMEN DE ORINA) (EGO)', 'public_cost' => 140, 'request' => 'Muestra de orina de la primer micción del día en frasco limpio preferentemente estéril, entregar muestra dentro de la primera 1 horas desde la recolección. Paciente femenino no estar en su periodo menstrual.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANALISIS DE CALCULO URINARIO', 'public_cost' => 320, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ANALISIS DE LIQUIDO SEMINAL', 'public_cost' => 450, 'request' => 'Abstinencia sexual de 2 a 7 días, recolectar muestra de semen de preferencia en el laboratorio, de no ser posible traerla al laboratorio dentro de los primeros 30 minutos posteriores a la recolección.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'ANDROSTENEDIONA ', 'public_cost' => 320, 'request' => 'Para estos estudios se requiere ayuno de: 12 horas.

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ANTI SARS-COV-2 IgG (ELISA)', 'public_cost' => 800, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ANTICOAGULANTE LUPICO  ', 'public_cost' => 880, 'request' => 'Para estos estudios se requiere ayuno de: 4 a 8 horas.

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ANTIESTREPTOLISINAS  ', 'public_cost' => 250, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANTIGENO CA 125 (OVARIO) ', 'public_cost' => 940, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Recoletar muestra de heces fecales.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANTIGENO CA 125 Y PROTEINA HE-4', 'public_cost' => 1830, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ANTIGENO CA 15-3 ', 'public_cost' => 390, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ANTIGENO CA 19.9 ', 'public_cost' => 410, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ANTIGENO CA 27-29 ', 'public_cost' => 1200, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'ANTIGENO CARCINOEMBRIONARIO ', 'public_cost' => 620, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANTIGENO DE CHLAMYDID T. ', 'public_cost' => 530, 'request' => 'Paciente masculino: El paciente no debe haber estado bajo tratamiento antibiótico por lo menos, 48 horas. Sin haber orinado 3 horas previas a la toma de muestra. Paciente femenino: paciente no debe haber estado bajo tratamiento antibiótico en, por lo menos, 48 horas. Sin lavados o duchas vaginales. Toma de muestra de lunes a viernes antes de las 12:00 p.m.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ANTIGENO DE CRYPTOCOCCUS NEOFORMANS ', 'public_cost' => 1150, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ANTIGENO DE ENTAMOEBA HISTOLYTICA ', 'public_cost' => 290, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Recoletar muestra de heces fecales.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANTIGENO DE GIARDIA LAMBLIA .', 'public_cost' => 870, 'request' => 'Entregar muestra de haces fecales en recipiente estéril de lunes a viernes antes de las 12:00 horas, la muestra debe ser del mismo día. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ANTIGENO DE HELICOBACTER PYLORI', 'public_cost' => 520, 'request' => 'Muestra de heces fecales

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANTIGENO DE ROTAVIRUS ', 'public_cost' => 330, 'request' => 'Muestra de heces fecales


Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANTIGENO HLA-B27 (AG HLA-B27)', 'public_cost' => 910, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ANTIGENO PROSTÁTICO ESPECÍFICO', 'public_cost' => 400, 'request' => 'Indicaciones Antígeno Prostático Específico:

2 días previos: 
Abstinencia sexual (no eyaculación). 
No ingerir alcohol.

1 día previo: No andar en bicicleta, motocicleta ni montar a caballo.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANTIGENO PROSTATICO ESPECIFICO TOTAL (PSAT)', 'public_cost' => 400, 'request' => '
2 días previos: 
Abstinencia sexual (no eyaculación). 
No ingerir alcohol.

1 día previo: No andar en bicicleta, motocicleta ni montar a caballo. 

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ANTIGENO PROSTATICO LIBRE Y TOTAL', 'public_cost' => 930, 'request' => '
2 días previos: 
Abstinencia sexual (no eyaculación). 
No ingerir alcohol.

1 día previo: No andar en bicicleta, motocicleta ni montar a caballo. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ANTITROMBINA ', 'public_cost' => 950, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'APOLIPOPROTEINA A1 ', 'public_cost' => 430, 'request' => 'Ayuno de 12 horas.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'APOLIPOPROTEINA B  ', 'public_cost' => 550, 'request' => 'Ayuno de 12 horas

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'ARSENICO EN SANGRE', 'public_cost' => 650, 'request' => '•Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

•Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ASPARTATO AMINO TRANSFERASA (AST/TGO)', 'public_cost' => 170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'AZUCARES REDUCTORES Y pH EN HECES', 'public_cost' => 150, 'request' => 'Recolectar muestra de heces del tamaño de una nuez en un recipiente estéril. 
En caso de recolectar en pañal se debe traspasar la muestra al recipiente estéril. 
Evitar que se mezcle con orina.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'BAAR (5 MUESTRAS)', 'public_cost' => 680, 'request' => 'Muestra de expectoración. Entregar muestra el mismo día que se recolecta. Se deberan recolectar 5 muestras de diferentes días.

Entrega de resultados: mismo día después de entregar la última muestra.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'BACILOSCOPIA UNICA MUESTRA (BAAR)', 'public_cost' => 140, 'request' => 'Muestra de expectoración recolectada en un recipiente estéril, debe ser entregada el mismo día al laboratorio.

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'BANDAS OLIGOCLONALES EN L.C.R. (BOC EN LCR)', 'public_cost' => 1790, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 11 días hábiles.', 'process_time' => 11, 'available_outside' => true],
            ['name' => 'BETA 2 MICROGLOBULINA EN ORINA DE UNA MICCION ', 'public_cost' => 830, 'request' => 'Muestra de orina de la primer micción del día en frasco limpio preferentemente estéril.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'BETA 2 MICROGLOBULINA ', 'public_cost' => 210, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'BETA CAROTENOS ', 'public_cost' => 980, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: 10 días hábiles.
', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'BICARBONATO PLASMÁTICO  ', 'public_cost' => 670, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'BILIRRUBINAS SERICAS (TOTALES)', 'public_cost' => 170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'BUSQUEDA DE BAAR EN EXPECTORACION (2 MUESTRAS)', 'public_cost' => 180, 'request' => 'Recolectar muestra de expectoración (flema) en un recipiente estéril. 
Traer la muestra por día a la brevedad posible.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'BUSQUEDA DE BAAR EN EXPECTORACION (3 MUESTRAS)', 'public_cost' => 230, 'request' => 'Recolectar muestra de expectoración (flema) en un recipiente estéril. 
Traer la muestra por día a la brevedad posible.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'BUSQUEDA DE BAAR EN ORINA ( 3 MUESTRAS )', 'public_cost' => 230, 'request' => 'Recolectar muestra de la primera micción del día (una por día).
Traer la muestra por día a la brevedad posible.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'BUSQUEDA DE BAAR EN ORINA (10 MUESTRAS)', 'public_cost' => 860, 'request' => 'Recolectar muestra de la primera micción del día (una por día).
Traer la muestra por día a la brevedad posible.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'BUSQUEDA DE BAAR EN ORINA (5 MUESTRAS)', 'public_cost' => 430, 'request' => 'Muestra de orina de la primer micción del día en recipiente estéril, entregar muestra al laboratorio el mismo día que se recolecto. Se debe recolectar una muestra por día.

Entrega de resultados: mismo día después de entregar la última muestra.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CADENAS LIGERAS KAPPA/LAMBDA LIBRES', 'public_cost' => 1460, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'CALCIO EN ORINA ALEATORIA ', 'public_cost' => 170, 'request' => 'Recolectar muestra de orina de cualquier hora del día.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CALCIO EN ORINA DE 12 HORAS', 'public_cost' => 170, 'request' => 'Muestra de orina de 12 horas en recipiente ambar proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 12 horas de recolección).

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CALCIO EN ORINA DE 24 HORAS', 'public_cost' => 170, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CALCIO IONICO   ', 'public_cost' => 520, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CALCIO SÉRICO (CA)', 'public_cost' => 170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CALPROTECTINA Y LACTOFERRINA EN HECES', 'public_cost' => 690, 'request' => 'Recolectar muestra de heces fecales en un recipiente estéril. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'CAPTACION T3-T4 (TU)', 'public_cost' => 230, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CARBAMACEPINA (TEGRETOL)', 'public_cost' => 840, 'request' => 'Para estos estudios no se requiere ayuno. 
Tomar la muestra antes de la ingesta de la dosis del medicamento.

Entrega de resultados: 3 días hábiles', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CARGA VIRAL DE HIV-1 ', 'public_cost' => 3090, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.
Solo se realizan de lunes a viernes de: 7:30 a 12:00 h.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CARGA VIRAL PARA CITOMEGALOVIRUS ', 'public_cost' => 3650, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'CARGA VIRAL VIRUS DE HEPATITIS ""B""  ', 'public_cost' => 4430, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Toma de muestra de lunes a viernes antes de las 12:00 p.m. 

Entrega de resultados: 13 días hábiles.', 'process_time' => 13, 'available_outside' => true],
            ['name' => 'CARIOTIPO DE ALTA RESOLUCION EN SANGRE', 'public_cost' => 5240, 'request' => 'Solicitar historia clínica o probable diagnostico, no haber administrado clorafenicol, esteroides, vitamina C o antibióticos. No tomar la muestra si el paciente ha sido transfundido (esperar un mes), no tomar la muestra en caso de quimioterapia/radiación (esperar un mes). 

Toma de muestra solo de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'CARIOTIPO EN MEDULA OSEA /SANGRE ONCOLOGICA', 'public_cost' => 4430, 'request' => 'Solicitar historia clínica o probable diagnostico, no haber administrado clorafenicol, esteroides, vitamina C o antibióticos. No tomar la muestra si el paciente ha sido transfundido (esperar un mes), no tomar la muestra en caso de quimioterapia/radiación (esperar un mes).

Toma de muestra solo de lunes a jueves antes de las 12:00 pm. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'CARIOTIPO EN PAREJA EN SANGRE', 'public_cost' => 7350, 'request' => 'Solicitar historia clínica o probable diagnostico. No haber administrado clorafenicol, esteroides, vitamina C o antibióticos. No tomar la muestra si el paciente ha sido transfundido (esperar un mes), no tomar la muestra en caso de quimioterapia/radiación (esperar un mes). Toma de muestra solo de lunes a jueves antes de las 12:00 pm. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'CARIOTIPO EN SANGRE PERIFERICA (20 METAFASES)', 'public_cost' => 4240, 'request' => 'Solicitar historia clínica o probable diagnóstico, no haber administrado clorafenicol, esteroides, vitamina C o antibióticos (7 días previos ala toma de muestra). No tomar la muestra si el paciente ha sido transfundido (esperar un mes), no tomar la muestra en caso de quimioterapia/radiación (esperar un mes). Toma de muestra solo de lunes a jueves antes de las 12:00 pm.

Entrega de resultados: 12 días hábiles', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'CATECOLAMINAS EN ORINA DE 24 HORAS ', 'public_cost' => 1680, 'request' => 'Llamar al laboratorio para proporcionar recipiente con aditivo.

Muestra de orina de 24 horas en recipiente proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 24 horas de recolección.) Abstenerse de vainilla, café, chocolate, plátano, alcohol, té, tabaco, ejercicio, vitaminas y medicamentos 3 días antes iniciar la recolección de la orina. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'CATECOLAMINAS PLASMATICAS', 'public_cost' => 1780, 'request' => 'Para estos estudios no se requiere ayuno. 
3 días previos a la recolección abstenerse de: vainilla, café, chocolate, plátano, alcohol, té, tabaco, ejercicio, vitaminas y medicamentos. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'CELULAS ASESINAS NATURALES ( NK )', 'public_cost' => 650, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Toma de muestra de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CICLOSPORINA ', 'public_cost' => 1000, 'request' => 'Realizar la toma antes de ingerir la dosis de su medicamento.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'CISTATINA ""C""', 'public_cost' => 420, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CITOMETRIA HEMATICA COMPLETA (BH, BHC)', 'public_cost' => 270, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día. ', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CITOQUIMICO DE LIQUIDO BIOLOGICO', 'public_cost' => 770, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CITOQUIMICO DE LIQUIDO CEFALORRAQUIDEO', 'public_cost' => 520, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CITOQUIMICO DE LIQUIDO DE ASCITIS', 'public_cost' => 620, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CITOQUIMICO DE LIQUIDO PLEURAL', 'public_cost' => 740, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CITOQUIMICO DE LIQUIDO SINOVIAL', 'public_cost' => 740, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CITRATO EN ORINA DE 24 HORAS  ', 'public_cost' => 320, 'request' => 'Muestra de orina de 24 horas en recipiente proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 24 horas de recolección.) 

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'CLOSTRIDIUM DIFFICILE (TOXINAS A y B) ', 'public_cost' => 1000, 'request' => 'Recolectar en un recipiente estéril. 
La muestra fecal deberá ser del tamaño de una nuez o aprox. 5ml si es diarrea. 
Pacientes que usen pañal recolectar la muestra con un abatelenguas u otro utensilio limpio y depositarlo en el recipiente estéril. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COBRE EN SANGRE (Cu)', 'public_cost' => 650, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 14 días hábiles.', 'process_time' => 14, 'available_outside' => true],
            ['name' => 'COCAINA EN ORINA ', 'public_cost' => 180, 'request' => 'Acudir al laboratorio sin haber orinado en las últimas 4 horas.
Presentar una identificación oficial (con fotografía).

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'COLESTEROL DE ALTA DENSIDAD (HDL)', 'public_cost' => 220, 'request' => 'Ayuno de12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COLESTEROL DE BAJA DENSIDAD (LDL)', 'public_cost' => 230, 'request' => 'Ayuno de12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COLESTEROL TOTAL ', 'public_cost' => 140, 'request' => 'Ayuno de 8 a 12 horas

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COLESTEROL TOTAL  ', 'public_cost' => 140, 'request' => 'Ayuno de 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COLINESTERASA ERITROCITARIA.', 'public_cost' => 690, 'request' => 'Ayuno de 8 horas.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'COLINESTERASA   ', 'public_cost' => 380, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'COMPLEMENTO HEMOLITICO C5 ', 'public_cost' => 680, 'request' => 'Ayuno de 8 horas

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'COMPLEMENTO HEMOLITICO CH50 (CH50)', 'public_cost' => 510, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Toma de muestra de lunes a viernes antes de las 12:00 p.m. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'COMPLEMENTO HEMOLITICO FRACCION C3 (C3)', 'public_cost' => 510, 'request' => 'Ayuno de 8 a 12 horas

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COMPLEMENTO HEMOLITICO FRACCION C4 (C4)', 'public_cost' => 450, 'request' => 'Ayuno de 8 a 12 horas

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COOMBS DIRECTO', 'public_cost' => 180, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Se recomienda realizar en recién nacidos.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COOMBS DIRECTO (3 TEMPERATURAS)', 'public_cost' => 410, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Uso sugerido para pacientes pediatricos y adultos.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COOMBS DIRECTO    ', 'public_cost' => 180, 'request' => 'Se recomienda realizar a pacientes recien nacidos por indicación de su médico.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'COPROLOGICO', 'public_cost' => 330, 'request' => '
Recolectar en un recipiente estéril. 
La muestra fecal deberá ser del tamaño de una nuez o aprox. 5ml si es diarrea. 
Pacientes que usen pañal recolectar la muestra con un abatelenguas u otro utensilio limpio y depositarlo en el recipiente estéril. 
Evitar que la materia fecal se mezcle con orina. 
Evitar ingerir en las últimas 72 h medicamentos y los siguientes alimentos: Brócoli, espinacas, piña, alimentos irritantes, con exceso de grase, picantes en especial los elaborados con chile rojo, chile y café. 
Adicional a ello evitar: vitaminas con hierro, hierro, vitamina C, Peptobismol, aspirinas (y derivados), naproxeno y diclofenaco.
Traer la muestra el mismo día de su recolección.
No exponerla a altas temperaturas. No refrigerar

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COPROPARASITOSCOPICO 2 MUESTRAS (CPS(2))', 'public_cost' => 180, 'request' => 'Recolectar en un recipiente estéril 
La muestra de material fecal debe ser del tamaño de una nuez o aprox. 5ml si es diarrea.
Pacientes que usen pañal recolectar la muestra con un abatelenguas u otro utensilio limpio y depositarlo en el recipiente estéril. 
Evitar que la materia fecal se mezcle con orina. 
Traer la muestra el mismo día de su recolección en caso de muestra única. 
En caso de 2 o 3 muestras se pueden traer por día o bien traerlas al mismo tiempo identificando cada muestra por día. 
Las muestras se pueden conservar en refrigeración.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COPROPARASITOSCOPICO EN SERIE (CSP(3))', 'public_cost' => 230, 'request' => 'Recolectar en un recipiente estéril 
La muestra de material fecal debe ser del tamaño de una nuez o aprox. 5ml si es diarrea.
Pacientes que usen pañal recolectar la muestra con un abatelenguas u otro utensilio limpio y depositarlo en el recipiente estéril. 
Evitar que la materia fecal se mezcle con orina. 
Traer la muestra el mismo día de su recolección en caso de muestra única. 
En caso de 2 o 3 muestras se pueden traer por día o bien traerlas al mismo tiempo identificando cada muestra por día. 
Las muestras se pueden conservar en refrigeración.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'COPROPARASITOSCOPICO UNICA MUESTRA (CPS )', 'public_cost' => 140, 'request' => 'Recolectar en un recipiente estéril 
La muestra de material fecal debe ser del tamaño de una nuez o aprox. 5ml si es diarrea.
Pacientes que usen pañal recolectar la muestra con un abatelenguas u otro utensilio limpio y depositarlo en el recipiente estéril. 
Evitar que la materia fecal se mezcle con orina. 
Traer la muestra el mismo día de su recolección en caso de muestra única. 
En caso de 2 o 3 muestras se pueden traer por día o bien traerlas al mismo tiempo identificando cada muestra por día. 
Las muestras se pueden conservar en refrigeración.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CORRECCIONES Y DIL. T. DE TROMBOPLASTINA PARCIAL ACTIVADA', 'public_cost' => 440, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CORRECCIONES Y DILUCIONES TIEMPO DE PROTROMBINA', 'public_cost' => 440, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CORRECCIONES Y DILUCIONES TIEMPO DE TROMBINA', 'public_cost' => 590, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CORTISOL EN ORINA DE 24 HORAS ', 'public_cost' => 550, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CORTISOL MATUTINO', 'public_cost' => 610, 'request' => 'Toma de muestra de 07:30 a 10:00 horas. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CORTISOL MATUTINO ', 'public_cost' => 610, 'request' => 'Toma de muestra de 07:30 a 10:00 horas. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CORTISOL NOCTURNO ', 'public_cost' => 610, 'request' => 'Toma de muestra de 20:00 a 22:00 horas. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CORTISOL VESPERTINO', 'public_cost' => 610, 'request' => 'Toma de muestra de 16:00 a 18:00 horas. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CORTISOL ', 'public_cost' => 610, 'request' => 'Toma de muestra de 07:30 a 10:00 horas. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CREATIN FOSFOCINASAS ISOENZIMAS', 'public_cost' => 1250, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 10 días hábiles.
', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'CREATINFOSFOQUINASA (CPK) (CPK)', 'public_cost' => 320, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CREATINFOSFOQUINASA ISOENZIMA MB (CK-MB)', 'public_cost' => 380, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CREATININA EN LIQUIDO BIOLGICO ', 'public_cost' => 130, 'request' => 'Recolectar la muestra en un recipiente estéril y entregarla al químico.

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CREATININA EN ORINA DE 12 HORAS ', 'public_cost' => 160, 'request' => 'Muestra de orina de 12 horas en recipiente ambar proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 12 horas de recolección).

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CREATININA EN ORINA DE 24 HORAS ', 'public_cost' => 160, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando.
Para la de Depuración de Creatinina (implica muestra sanguínea) contar con los siguientes datos:
Peso
Talla

Entrega de resultados mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CREATININA SÉRICA ', 'public_cost' => 130, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CREATININA URINARIA ', 'public_cost' => 160, 'request' => 'Muestra de orina de cualquier hora del día

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CREATINONURIA ', 'public_cost' => 130, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CRIOAGLUTININAS ', 'public_cost' => 300, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Toma de muestra de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CRISTALOGRAFIA DE LIQUIDO AMNIOTICO', 'public_cost' => 170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CRISTALOGRAFIA DE LIQUIDOS BIOLOGICOS', 'public_cost' => 370, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Entregar la muestra en un recipiente estéril.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'CROMOSOMA FILADELFIA BCR-ABL, LLA, t(9;22)', 'public_cost' => 3700, 'request' => 'Para estos estudios no se requiere. Tomar la muestra de lunes a jueves antes de las 12:00 horas.

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'C-TELOPEPTIDOS', 'public_cost' => 1220, 'request' => 'Ayuno de 4 horas. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'CULTIVO CERVICO-VAGINAL (CV)', 'public_cost' => 370, 'request' => '3 días previos a la toma: 
 No deberá aplicar óvulos, cremas, geles o duchas vaginales.
 No recibir tratamiento con antibióticos.

1 día previo a la toma: Abstinencia sexual. 

No estar menstruando al momento de la toma y asistir con un previo aseo de genitales. 

Entrega de resultados: 3 días naturales.', 'process_time' => 3, 'available_outside' => false],
            ['name' => 'CULTIVO DE EXPECTORACION', 'public_cost' => 370, 'request' => 'Recolectar muestra de expectoración (flema) en un recipiente estéril (evitar recolectar saliva).
Realizar previo aseo bucal.

Entrega de resultados: 5 días naturales', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CULTIVO DE HONGOS', 'public_cost' => 390, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 25 días hábiles.
', 'process_time' => 25, 'available_outside' => true],
            ['name' => 'CULTIVO DE LIQUIDO BIOLOGICO', 'public_cost' => 370, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CULTIVO DE LIQUIDO CEFALORRAQUIDEO', 'public_cost' => 850, 'request' => 'Recolectar muestra de L.C.R.

Entrega de resultados: 5 días naturales.
', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CULTIVO DE LIQUIDO DE ASCITIS', 'public_cost' => 400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CULTIVO DE LIQUIDO PLEURAL', 'public_cost' => 370, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Entregar la muesta en un recipiente estéril.

Entrega de resultados: 5 días naturales.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CULTIVO DE LIQUIDO SINOVIAL', 'public_cost' => 370, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días naturales.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CULTIVO DE MICOBACTERIAS', 'public_cost' => 900, 'request' => 'Recolectar muestra.
Solo se realizan de lunes a viernes de: 7:30 a 12:00 h

Entrega de resultados: 8 semanas.', 'process_time' => 56, 'available_outside' => true],
            ['name' => 'CULTIVO DE MICOBACTERIAS (QUEST)', 'public_cost' => 900, 'request' => 'Recepción de muestra solo de lunes a viernes antes de las 12:00 p.m. 

Entrega de resultados: 8 semanas.', 'process_time' => 56, 'available_outside' => true],
            ['name' => 'CULTIVO DE MYCOPLASMA/UREAPLASMA U.', 'public_cost' => 680, 'request' => 'Paciente masculino: El paciente no debe haber estado bajo tratamiento antibiótico por lo menos en 48 horas previas. Sin haber orinado 3 horas previas a la toma de muestra y previo aseo. Toma de muestra solo de lunes a viernes antes de las 12:00 p.m. 

Paciente femenino: El paciente no debe haber estado bajo tratamiento antibiótico por lo menos en 48 horas previas. Sin lavados o duchas vaginales. Presentarse con aseo externo. Toma de muestra solo de lunes a viernes antes de las 12:00 horas.

Entrega de resultados: 7 días hábiles.', 'process_time' => 7, 'available_outside' => false],
            ['name' => 'CULTIVO DE SANGRE (HEMOCULTIVO) ', 'public_cost' => 850, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 7 días naturales.', 'process_time' => 7, 'available_outside' => true],
            ['name' => 'CULTIVO DE SECRECION', 'public_cost' => 370, 'request' => '
No hacer curación antes de tomar la muestra
Descartar tratamiento previo con antibióticos. Salvo indicación del médico tratante. 

Entrega de resultados: 5 días naturales.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CULTIVO DE SECRECION URETRAL', 'public_cost' => 370, 'request' => 'No orinar en las últimas 4 horas previas al momento de la toma de muestra.

Entrega de resultados: 3 días naturales.', 'process_time' => 3, 'available_outside' => false],
            ['name' => 'CULTIVO DE SECRECION/MAT.VARIOS', 'public_cost' => 370, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días naturales.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'CULTIVO FARINGEO', 'public_cost' => 370, 'request' => '
Favor de asistir en ayuno y sin ingerir bebidas previo a la toma de muestra.

No realizar aseo bucal con pasta o enjuague.

De preferencia no tomar antibióticos al menos 5 días antes de la toma de muestra a menos que su médico lo indique.

En caso de bebés traerlo antes de su siguiente toma de alimento.

Entrega de resultados: 3 días naturales.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CULTIVO MICOBACTERIAS CON IDENTIFICACIÓN', 'public_cost' => 900, 'request' => 'Recepción de muestra solo de lunes a viernes antes de las 12:00 p.m.

Entrega de resultados: 8 semanas.', 'process_time' => 56, 'available_outside' => false],
            ['name' => 'CULTIVO NASAL', 'public_cost' => 370, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CULTIVO NASOFARINGEO', 'public_cost' => 370, 'request' => 'Presentarse sin aseo bucal y en ayuno.

Entrega de resultados: 3 días naturales.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'CURVA DE INSULINA', 'public_cost' => 1930, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y n más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.
. 
Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE INSULINA 3 HORAS', 'public_cost' => 2300, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y n más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE INSULINA 3 TOMAS ', 'public_cost' => 1530, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y 2 más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE TOLERANCIA A LA GLUCOSA (2 TOMAS/2 HORAS)', 'public_cost' => 290, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y 2 más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE TOLERANCIA A LA GLUCOSA (2 TOMAS/60 MN.)', 'public_cost' => 290, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y 1 más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE TOLERANCIA A LA GLUCOSA (3 TOMAS)', 'public_cost' => 400, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno, a la hora y 2 horas posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE TOLERANCIA A LA GLUCOSA (4 HORAS)', 'public_cost' => 810, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y 6 más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE TOLERANCIA A LA GLUCOSA (4 TOMAS/3 HORAS)', 'public_cost' => 480, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y 3 más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE TOLERANCIA A LA GLUCOSA (5 TOMAS/3 HORAS)', 'public_cost' => 660, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y 4 más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE TOLERANCIA A LA GLUCOSA (6 TOMAS DE MUESTRA) (CTG)', 'public_cost' => 720, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y 5 más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica, durante el lapso de la toma de las 6 muestras el paciente permanecera en ayuno.
. 
Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'CURVA DE TOLERANCIA A LA GLUCOSA (8 TOMAS/5 HORAS)', 'public_cost' => 930, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno y 7 más posterior a la carga de glucosa a la hora o media hora de acuerdo a la indicación médica.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'DEGRANULACION DE BASOFILOS', 'public_cost' => 2810, 'request' => 'Informar la dosis del medicamento. 
Es válido hasta 4 medicamentos. 
Se requiere entregar 3 pastillas o capsulas, 1 ampolleta o frasco de suspensión de cada medicamento.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'DEHIDROEPIANDROSTERONA (DHEA)', 'public_cost' => 290, 'request' => 'Para estos estudios se requiere ayuno de: 12 horas.

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'DEHIDROTESTOSTERONA (DHT)', 'public_cost' => 680, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'DELECION 5q Y -5 ', 'public_cost' => 3900, 'request' => 'Toma de muestra de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'DENSIDAD URINARIA EN ORINA DE 24 HORAS ', 'public_cost' => 140, 'request' => 'Muestra de orina de 24 horas en recipiente proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 24 horas de recolección.

Entrega de resultados: el mismom día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'DEPURACION DE CREATININA', 'public_cost' => 720, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 
Para la de Depuración de Creatinina (implica muestra sanguínea) contar con los siguientes datos:
Peso
Talla

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'DESHIDROGENASA LÁCTICA (DHL)', 'public_cost' => 330, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'DETECCIÓN CUALITATIVA DE PARVOVIRUS B19 POR PCR', 'public_cost' => 4440, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'DETECCION DE Ag. DEL VIRUS INFLUENZA A Y B', 'public_cost' => 600, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'DETECCION DE ANTIGENO VIRUS SARS-CoV2 (COVID-19)', 'public_cost' => 850, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'DETECCION DE CORONAVIRUS SARS-COV-2 (COVID-19) POR PCR', 'public_cost' => 1900, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: En un plazo aproximado de 12 a 24 h.', 'process_time' => 1, 'available_outside' => true],
            ['name' => 'DETECCION DE DROGAS DE ABUSO (ANTIDOPING)', 'public_cost' => 480, 'request' => 'El paciente no deberá haber orinado ni consumido líquidos abundantes en las últimas 4 horas.
Indispensable presentar identificación oficial con fotografía.

 Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'DETECCION DE Mycobacterium tuberculosis POR PCR ', 'public_cost' => 2560, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Recolectar muestra en recipiente estéril.
Solo se realizan de lunes a viernes de: 7:30 a 12:00 h.

Entrega de resultados: 5 días hábiles', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'DETECCION Y GENOTIPIFICACION DE VPH POR PCR (PAC. MASC.)', 'public_cost' => 1970, 'request' => 'No orinar 3 h previas a la toma de muestra.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 9 días hábiles', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'DIGOXINA (LANOXIN)', 'public_cost' => 420, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.
', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'DIHIDROTESTOSTERONA (DHT)', 'public_cost' => 680, 'request' => 'Ayuno de 8 horas. 

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'DÍMERO D ', 'public_cost' => 640, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'DIOXIDO DE CARBONO (CO2 TOTAL) (CO2)', 'public_cost' => 140, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'DOPAMINA EN PLASMA  ', 'public_cost' => 720, 'request' => 'Ayuno de 8 a 12 horas, el paciente debe evitar el alcohol, el café, el té, el tabaco y el ejercicio intenso antes de la recolección. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'DROGAS DE ABUSO 3 ELEMENTOS (ANTIDOPING)', 'public_cost' => 320, 'request' => 'El paciente no deberá haber orinado ni consumido líquidos abundantes en las últimas 4 horas.
Indispensable presentar identificación oficial con fotografía

 Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'ELECTROFORESIS DE HEMOGLOBINA', 'public_cost' => 1200, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ELECTROFORESIS DE PROTEINAS', 'public_cost' => 680, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ELECTROLITOS EN ORINA (MUESTRA ALEATORIA)', 'public_cost' => 350, 'request' => 'Recolectar muestra de orina de cualquier hora del día.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ELECTROLITOS EN ORINA DE 24 HORAS', 'public_cost' => 350, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ELECTROLITOS EN SUDOR', 'public_cost' => 290, 'request' => 'No requiere ayuno. 
Realizar baño con jabón neutro y no aplicar crema ni cualquier otro producto. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ELECTROLITOS SERICOS (ES)', 'public_cost' => 350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ELECTROLITOS SERICOS COMPLETOS (ES6)', 'public_cost' => 970, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ENFERMEDAD MINIMA RESIDUAL (EMR)', 'public_cost' => 6400, 'request' => 'Solicitar historia clínica a su médico.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.
Solo se puede llevar a cabo si previamente se realizó inmunofenotipo. 

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'EOSINOFILOS EN MOCO NASAL (UNICA MUESTRA)', 'public_cost' => 140, 'request' => 'No realizar aseo nasal.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'EOSINOFILOS EN MOCO NASAL EN SERIE (3 MUESTRAS)', 'public_cost' => 230, 'request' => 'No realizar aseo nasal.
Toma de muestra de 3 días distintos.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ERITROPOYETINA (EPO)', 'public_cost' => 660, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'ERITROSEDIMENTACION GLOBULAR (V.S.G.) (VSG)', 'public_cost' => 120, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ESPERMATOBIOSCOPIA DIRECTA (ANALISIS DE LIQUIDO SEMINAL)', 'public_cost' => 450, 'request' => 'Abstinencia sexual (evitar eyaculaciones) de 2 a 7 días.
Recolectar preferentemente la muestra de semen en el laboratorio. De no ser posible, hacerlo en un recipiente estéril y traerla en un tiempo máximo de 30 minutos posterior a la recolección. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ESPERMATOBIOSCOPIA INDIRECTA (SIMS-HUNNER)', 'public_cost' => 350, 'request' => 'Comunicarse al laboratorio para solicitar indicaciones.

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'ESPERMOCULTIVO', 'public_cost' => 370, 'request' => '
Previo aseo del área genital.
Obtener una muestra de esperma en un recipiente.
No deben pasar más de 60 minutos en traer la muestra al laboratorio.

Entrega de resultados: de 3 - 4 días naturales.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'ESTALLIDO RESPIRATORIO (PRUEBA NBT)', 'public_cost' => 1670, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Toma de muestra de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => false],
            ['name' => 'ESTRADIOL (E2)', 'public_cost' => 360, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'ESTROGENOS TOTALES', 'public_cost' => 570, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'ESTUDIO ANATOMOPATOLOGICO', 'public_cost' => 6100, 'request' => 'Entregar la muestra en un recipiente estéril de preferencia de lunes a jueves. Solicitar a su médico historia clínica y entregarla junto con la muetra.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ESTUDIO CITOGENETICO EN MEDULA OSEA ', 'public_cost' => 4900, 'request' => 'Entregar la muestra de lunes a jueves antes de las 12:00 horas. Solicitar a su médico historia clínica y entregarla junto con la muetra.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'ESTUDIO CROMOSOMICO CENTONIPT', 'public_cost' => 18000, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 15 días hábiles.', 'process_time' => 15, 'available_outside' => true],
            ['name' => 'EXAMEN GENERAL DE ORINA (ANALISIS COMPLETO DE ORINA)', 'public_cost' => 140, 'request' => '
Recolectar la primera orina del día en recipiente estéril a chorro medio (descartar la primer parte del chorro). 
En caso de que el paciente sea femenino, no deberá estar menstruando. 
Favor de traer su muestra máximo 1 hora posterior a la recolección.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'EXAMENES PRENUPCIALES', 'public_cost' => 250, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FACTOR DE VON WILLEBRAND (ANTIGENO) (AG FvW)', 'public_cost' => 1000, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'FACTOR DE VON WILLEBRAND FUNCIONAL (FvW)', 'public_cost' => 1200, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'FACTOR IX DE LA COAGULACIÓN', 'public_cost' => 560, 'request' => 'Ayuno mínimo de 4 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FACTOR IX DE LA COAGULACIÓN  ', 'public_cost' => 560, 'request' => 'Ayuno mínimo de 4 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FACTOR REUMATOIDE (FR)', 'public_cost' => 250, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FACTOR V MUTACION DE LEIDEN ', 'public_cost' => 2260, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'FACTOR VIII DE LA COAGULACIÓN (FVIII)', 'public_cost' => 560, 'request' => 'Ayuno mínimo de 4 horas. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'FACTOR VIII DE LA COAGULACIÓN ', 'public_cost' => 560, 'request' => 'Ayuno mínimo de 4 horas, 

Entrega de resultados: 3 días hábiles. ', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'FACTOR XII DE COAGULACION ', 'public_cost' => 540, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles. ', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'FACTOR XIII DE LA COAGULACION ', 'public_cost' => 680, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'FENITOINA (EPAMIN)', 'public_cost' => 500, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'FENOBARBITAL ', 'public_cost' => 570, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'FERRITINA  ', 'public_cost' => 400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FIBRINOGENO (FIB C)', 'public_cost' => 300, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FIBRINÓGENO ', 'public_cost' => 300, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FORMULA BLANCA (FB)', 'public_cost' => 270, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FORMULA ROJA (FR)', 'public_cost' => 270, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FOSFATASA ÁCIDA ', 'public_cost' => 270, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FOSFATASA ALCALINA OSEA ', 'public_cost' => 850, 'request' => 'Ayuno de 8 horas,

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'FOSFATASA ALCALINA  ', 'public_cost' => 210, 'request' => 'Ayuno de 8 a 12 horas

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FOSFORO EN ORINA ALEATORIA', 'public_cost' => 220, 'request' => 'Recolectar muestra de orina de cualquier hora del día.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FOSFORO EN ORINA DE 24 HORAS', 'public_cost' => 220, 'request' => 'Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FOSFORO SÉRICO (P)', 'public_cost' => 220, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'FRAGILIDAD ERITROCITARIA A GLICEROL ACIDIFICADO ', 'public_cost' => 440, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 1 día hábil. ', 'process_time' => 1, 'available_outside' => true],
            ['name' => 'FRAGILIDAD OSMOTICA ERITROCITARIA', 'public_cost' => 440, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'GAMA GLUTAMIL TRANSFERASA (GGT)', 'public_cost' => 180, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'GASES EN SANGRE ARTERIAL', 'public_cost' => 670, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'GASES EN SANGRE VENOSA', 'public_cost' => 670, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'GENOTIPIFICACION DEL VIRUS DEL PAPILOMA HUMANO', 'public_cost' => 1970, 'request' => 'Aseo previo. Abstinencia sexual de 2 días, No aplicar ovulos ni cremas. En hombres: No orinar 3 horas previas a la toma de la muestra. Solo hombres tomar muestra de lunes a jueves antes de las 12:00 p.m. Solo Mujeres tomar muestra de lunes a viernes antes de las 12:00 p.m

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => false],
            ['name' => 'GLOBULINA TRANSPORTADORA DE HORMONAS SEXUALES (SHGB)', 'public_cost' => 1060, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'GLUCOSA 6 FOSFATO DESHIDROGENASA (G6PD)', 'public_cost' => 650, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 3 días hábiles.
', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'GLUCOSA POST PRANDIAL (1 Y 2 HORAS)', 'public_cost' => 400, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.
Se realizan otras dos tomas de muestra en una y dos horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'GLUCOSA POST-PRANDIAL', 'public_cost' => 230, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno. Posteriormente realizar desayuno y al termino de 2 h se realiza una segunda toma.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'GLUCOSA SERICA  ', 'public_cost' => 130, 'request' => 'Ayuno de 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'GRUPO SANGUINEO Y FACTOR Rh (GPO Y Rh )', 'public_cost' => 140, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'H. ADRENOCORTICOTROPICA (ACTH)', 'public_cost' => 480, 'request' => 'Para estos estudios se requiere no consuir 12 horas previas a la toma de muestra biotina y vitamina B7.
Entrega de resultados: 5 días hábiles.
Solo se realizan de lunes a viernes de: 8:00 a 10:00 h.

•Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'H. DE CRECIMIENTO BASAL Y POST-PRANDIAL', 'public_cost' => 640, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno. Posteriormente realizar desayuno y al termino de 2 h se realiza una segunda toma.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'H.G.C. CUALITATIVA (H.G.C.)', 'public_cost' => 400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'H.G.C. FRACCION BETA CUANTITATIVA', 'public_cost' => 400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'HAPTOGLOBINAS ', 'public_cost' => 450, 'request' => 'Ayuno de 8 a 12 horas. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'HEMOCULTIVO (MUESTRA DE CATETER)', 'public_cost' => 850, 'request' => 'Pico febril.

Entrega de resultados: 7 días hábiles.', 'process_time' => 7, 'available_outside' => true],
            ['name' => 'HEMOCULTIVO (SANGRE PERIFERICA)', 'public_cost' => 850, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 7 días naturales.', 'process_time' => 7, 'available_outside' => true],
            ['name' => 'HEMOGLOBINA GLICADA (Hba1c)', 'public_cost' => 310, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'HEMOGLOBINA GLUCOSILADA (HbA1c) (Hba1c)', 'public_cost' => 310, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'HERPES TIPO II (IgG) (ACS. ANTI-VHS II)', 'public_cost' => 280, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 
Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'HIDROXIPROLINA EN ORINA DE 24 HORAS  ', 'public_cost' => 710, 'request' => 'Muestra de orina de 24 horas en recipiente proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 24 horas de recolección.). 

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'HIDROXIPROLINA TOTAL EN ORINA DE 24 HRS', 'public_cost' => 710, 'request' => 'Muestra de orina de 24 horas en recipiente proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 24 horas de recolección.) Se realiza unicamente de lunes a viernes antes de las 12:00 horas.

Entrega de resultados: 6 días hábiles', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'HIERRO SÉRICO (Fe)', 'public_cost' => 220, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'HORMONA ANTI-DIURETICA  ', 'public_cost' => 1890, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'HORMONA ANTI-MULLERIANA ', 'public_cost' => 2230, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'HORMONA DE CRECIMIENTO (GH)', 'public_cost' => 310, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'HORMONA ESTIMULANTE DE TIROIDES (TSH)', 'public_cost' => 240, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'HORMONA FOLICULO ESTIMULANTE (FSH)', 'public_cost' => 300, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'HORMONA LUTEINIZANTE (LH)', 'public_cost' => 300, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'HORMONA PARATIROIDEA INTACTA (PTH)', 'public_cost' => 410, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'IgE ESPECIFICA A GLUTEN', 'public_cost' => 460, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 7 días hábiles.', 'process_time' => 7, 'available_outside' => true],
            ['name' => 'IGF UNIDA A PROTEINA 3 (GFBP-3) ', 'public_cost' => 760, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'INDICE ALBUMINA CREATININA EN ORINA ', 'public_cost' => 780, 'request' => '
Recolectar muestra de orina de cualquier hora del día.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'INDUCCIÓN DE DREPANOCITOS  ', 'public_cost' => 300, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'INHIBIDOR DE ESTERASA DE C1', 'public_cost' => 710, 'request' => '•Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

•Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'INHIBIDOR DE FACTOR IX DE LA COAGULACION ', 'public_cost' => 530, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'INHIBIDOR DE FACTOR VIII DE LA COAGULACION ', 'public_cost' => 530, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'INHIBINA A ', 'public_cost' => 2280, 'request' => 'Ayuno de 8 horas

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'INHIBINA B (INH B)', 'public_cost' => 3600, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'INMUNOFENOTIPO EN SANGRE PERIFERICA', 'public_cost' => 6400, 'request' => 'Solicitar historia clínica a su médico.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'INMUNOFENOTIPO PLAQUETARIO ', 'public_cost' => 1650, 'request' => 'Para estos estudios no se requiere ayuno. Tomar la muestra de lunes a viernes antes de las 12:00 horas.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'INMUNOFENOTIPO  ', 'public_cost' => 6400, 'request' => 'Solicitar historia clínica. Se recibe muestra de medula ósea o toma muestra de sangre periférica solo de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'INMUNOFENOTIPO   ', 'public_cost' => 6400, 'request' => 'Solicitar historia clínica a su médico.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 8 - 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'INMUNOFIJACION DE PROTEINAS', 'public_cost' => 1300, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'INMUNOGLOBULINA ""A"" (IgA) (IGA)', 'public_cost' => 230, 'request' => 'Ayuno de 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'INMUNOGLOBULINA ""E"" (IgE)', 'public_cost' => 520, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'INMUNOGLOBULINA ""E"" PARA ASPERGILLUS FUMIGATUS ', 'public_cost' => 620, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'INMUNOGLOBULINA ""G"" (IgG) (IGG)', 'public_cost' => 230, 'request' => 'Ayuno de 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'INMUNOGLOBULINA ""M"" (IgM) (IGM)', 'public_cost' => 230, 'request' => 'Ayuno de 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'INMUNOGLOBULINA ESTIMULANTE DE TIROIDES ', 'public_cost' => 2020, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 15 días hábiles.', 'process_time' => 15, 'available_outside' => true],
            ['name' => 'INMUNOGLOBULINA G Sub Clases 1, 2, 3 y 4', 'public_cost' => 1730, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'INMUNOGLOBULINAS (G, A, M)', 'public_cost' => 640, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'INMUNOGLOBULINAS TOTALES', 'public_cost' => 960, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'INSULINA BASAL Y POST-ESTIMULO', 'public_cost' => 1100, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.
Este estudio tarda un aproximado de 3 h.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'INSULINA BASAL Y POST-PRANDIAL', 'public_cost' => 1100, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas. 
Se realiza una muestra en ayuno. Posteriormente realizar desayuno y al termino de 2 h se realiza una segunda toma.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'INSULINA  ', 'public_cost' => 510, 'request' => 'Ayuno de 8 a 12 horas

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'INTERLEUCINA 6  ', 'public_cost' => 1100, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 18 días hábiles.', 'process_time' => 18, 'available_outside' => true],
            ['name' => 'INVESTIGACION DE GALACTOSEMIA', 'public_cost' => 680, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.
Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'INVESTIGACION DE OXIUROS ', 'public_cost' => 110, 'request' => 'Presentarse sin baño corporal.

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'LACTATO PLASMATICO ', 'public_cost' => 140, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'LEPTINA', 'public_cost' => 870, 'request' => 'Ayuno de 8 horas. 

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'LEVETIRACETAM (KEPPRA)', 'public_cost' => 1200, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'LINFOCITOS CD19, CD20,', 'public_cost' => 1400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Toma de muestra de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'LINFOCITOS CD3/CD4/CD8', 'public_cost' => 1490, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Toma de muestra de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'LINFOCITOS T SUBPOBLACION', 'public_cost' => 2800, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Toma de muestra de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'LIPASA SÉRICA ', 'public_cost' => 300, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'LISIS DE EUGLOBULINA  ', 'public_cost' => 630, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'MAGNESIO EN ORINA ALEATORIA ', 'public_cost' => 230, 'request' => 'Recolectar muestra de orina de cualquier hora del día.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'MAGNESIO EN ORINA DE 24 HORAS ', 'public_cost' => 270, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'MAGNESIO SÉRICO (Mg)', 'public_cost' => 230, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'MERCURIO EN ORINA ', 'public_cost' => 630, 'request' => 'Recolectar muestra de orian en un recipiente estéril y entregarla al químico.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'METANEFRINAS EN ORINA DE 24 HORAS', 'public_cost' => 1680, 'request' => 'Comunicarse al laboratorio para proporcionar recipiente con aditivo. 
Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 
3 días previos a la recolección abstenerse de: vainilla, café, chocolate, plátano, alcohol, té, tabaco, ejercicio, vitaminas y medicamentos. 

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'METANEFRINAS EN PLASMA', 'public_cost' => 1680, 'request' => '3 días previos a la recolección abstenerse de: vainilla, café, chocolate, plátano, alcohol, té, tabaco, ejercicio, vitaminas y medicamentos. 

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'METANOL EN SANGRE   ', 'public_cost' => 1950, 'request' => 'Ayuno de 8 a 12 horas. 

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'MONOSOMIA 7 ', 'public_cost' => 3900, 'request' => 'Ayuno de 8 horas, toma de muestra de lunes a jueves antes de las 12:00 p.m. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'MUTACIÓN 677 C-T EN EL GEN DE LA MTHFR', 'public_cost' => 1200, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Toma de muestras de lunes a viernes antes de las 12:00 p.m. 

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'MUTACION GEN DE PROTROMBINA (20210)', 'public_cost' => 2950, 'request' => 'Ayuno de 8 horas. Toma de muestra de lunes a viernes antes de las 12:00 p.m. 

Entrega de resultados: 6 días hábiles. ', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'MUTACION JAK2V617F', 'public_cost' => 2600, 'request' => 'Solicitar historia clínica a su médico.
Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 7 días hábiles.', 'process_time' => 7, 'available_outside' => true],
            ['name' => 'NITROGENO UREICO EN ORINA DE 24 HORAS', 'public_cost' => 160, 'request' => 'Muestra de orina de 24 horas en recipiente proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 24 horas de recolección.)

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'NITROGENO UREÍCO ', 'public_cost' => 130, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'N-TERMINAL PROPEPTIDO NATRIURÉTICO CEREBRAL (PBNP)', 'public_cost' => 870, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'OSMOLALIDAD SERICA', 'public_cost' => 400, 'request' => '
Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'OSMOLARIDAD EN ORINA ALEATORIA', 'public_cost' => 230, 'request' => 'Muestra de orina de la primer micción del día en frasco limpio preferentemente estéril, entregar muestra dentro de la primera 1 horas desde la recolección. Paciente femenino no estar en su periodo menstrual.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'OSMOLARIDAD SÉRICA', 'public_cost' => 400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'OXCARBAZEPINA ', 'public_cost' => 1310, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 15 días hábiles.', 'process_time' => 15, 'available_outside' => true],
            ['name' => 'PANEL DE ANTICUERPOS ESPECIFICOS PARA MIOSITIS ', 'public_cost' => 3690, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 10 días hábiles.
', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'PANEL ESPECIFICO PARA MIOSITIS', 'public_cost' => 3690, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'PAPANICOLAOU (CITOLOGIA DE CERVIX) (PAP)', 'public_cost' => 350, 'request' => '3 días previos a la toma: 
 No deberá aplicar óvulos, cremas, geles o duchas vaginales.
 No recibir tratamiento con antibióticos.

1 día previo a la toma: Abstinencia sexual. 

No estar menstruando al momento de la toma y asistir con un previo aseo de genitales. 

Entrega de resultados: 3 días.', 'process_time' => 3, 'available_outside' => false],
            ['name' => 'PAPANICOLAOU (PAP)', 'public_cost' => 350, 'request' => '3 días previos a la toma: 
 No deberá aplicar óvulos, cremas, geles o duchas vaginales.
 No recibir tratamiento con antibióticos.

1 día previo a la toma: Abstinencia sexual. 

No estar menstruando al momento de la toma y asistir con un previo aseo de genitales. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => false],
            ['name' => 'PAPANICOLAU EN LIQUIDO BIOLÓGICO', 'public_cost' => 570, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => false],
            ['name' => 'PERFIL BIOQUIMICO DE 12 ELEMENTOS', 'public_cost' => 740, 'request' => '
Ayuno de 8 a 12 horas

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL BIOQUIMICO DE 27 ELEMENTOS', 'public_cost' => 980, 'request' => 'Ayuno de 12 horas

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL BIOQUIMICO METABOLICO', 'public_cost' => 1080, 'request' => 'Ayuno de 8 horas. Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL DE ALERGENOS A LACTEOS', 'public_cost' => 2080, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'PERFIL DE ALERGENOS ALIMENTICIOS', 'public_cost' => 2880, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'PERFIL DE ALERGENOS DEL HUEVO ', 'public_cost' => 810, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL DE ALERGENOS INHALATORIOS ', 'public_cost' => 2880, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL DE ALERGIA ALIMENTICIA', 'public_cost' => 2880, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 4 días hábiles', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'PERFIL DE ALERGIA INHALATORIA', 'public_cost' => 2880, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL DE ANDROGENOS', 'public_cost' => 1300, 'request' => 'Ayuno de 8 horas, toma de muestra entre 07:30 y 10:00 a.m. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'PERFIL DE ANTIFOSFOLIPIDOS', 'public_cost' => 2170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'PERFIL DE COAGULACION', 'public_cost' => 540, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL DE ENFERMEDADES DE TRANSMISIÓN SEXUAL (ETS)', 'public_cost' => 3610, 'request' => 'Abstinencia sexual 3 dias previos a la toma de la muestra.

Entrega de resultados: 10 días habiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'PERFIL DE H. PARATIROIDEA POST RESECCION', 'public_cost' => 1600, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'PERFIL DE HEPATITIS B CUANTITATIVO', 'public_cost' => 1430, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'PERFIL DE HIERRO (CINETICA DE HIERRO)', 'public_cost' => 670, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL DE LIPIDOS (PL)', 'public_cost' => 550, 'request' => 'Para estos estudios se requiere ayuno de: 12 horas.
Entrega de resultados: mismo día.
', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL DE TORCH (IgG, IgM) ', 'public_cost' => 2350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL DE TORCH IgG', 'public_cost' => 730, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL DE TORCH IgG E IgM', 'public_cost' => 2350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL DE TORCH IgG, IgM', 'public_cost' => 2350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL DE TORCH IgM', 'public_cost' => 970, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL ENZIMATICO CARDIACO', 'public_cost' => 1010, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL HEPATICO (PH)', 'public_cost' => 680, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL HIPOFISIARIO', 'public_cost' => 1590, 'request' => 'Ayuno 8 de horas.
Tomar la muestra de lunes a viernes de 08:00 - 10:00 A.M.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL HORMONAL ', 'public_cost' => 1010, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL HORMONAL FEMENINO (PHF)', 'public_cost' => 1190, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL HORMONAL PARCIAL', 'public_cost' => 900, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL METABOLICO NEONATAL AMPLIADO (TAMIZ)', 'public_cost' => 1900, 'request' => 'Debe ser realizado en el lapso de los 3 hasta 30 días de nacido. Salvo indicación médica.
Se requiere que el último consumo de alimento sea 2 a 3 horas previo a la toma.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => false],
            ['name' => 'PERFIL METABOLICO NEONATAL BASICO (TAMIZ)', 'public_cost' => 720, 'request' => 'Debe ser realizado en el lapso de los 3 hasta 30 días de nacido. Salvo indicación médica.
Se requiere que el último consumo de alimento sea 2 a 3 horas previo a la toma.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => false],
            ['name' => 'PERFIL PARCIAL DE ALERGENOS A LACTEOS', 'public_cost' => 1315, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PERFIL PRENATAL INICIAL', 'public_cost' => 1820, 'request' => 'Para estos estudios se requiere ayuno de: 8-12 horas.
Recolectar la primera orina del día en recipiente estéril a chorro medio (descartar la primer parte del chorro). 
En caso de que el paciente sea femenino, no deberá estar menstruando. 
Favor de traer su muestra máximo 1 hora posterior a la recolección.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL QUIMICA SANGUINEA COMPLETA (QSC)', 'public_cost' => 350, 'request' => 'Ayuno de 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL RENAL', 'public_cost' => 1320, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Indicaciones orina de 24 horas:
Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando.

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL REUMATICO', 'public_cost' => 860, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL TIROIDEO (PFT)', 'public_cost' => 610, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PERFIL VIRAL PARA HEPATITIS ""B""', 'public_cost' => 1430, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'PLAQUETAS  ', 'public_cost' => 270, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'POTASIO SÉRICO (K)', 'public_cost' => 140, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROCALCITONINA (PRL)', 'public_cost' => 750, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROGESTERONA (PRG)', 'public_cost' => 360, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROLACTINA MONOMERICA (PRL MON)', 'public_cost' => 360, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROLACTINA TOTAL (PRL)', 'public_cost' => 360, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROTEINA ""C"" DE COAGULACION  ', 'public_cost' => 2240, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'PROTEÍNA ""C"" REACTIVA DE ALTA SENSIBILIDAD (PCR)', 'public_cost' => 240, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROTEINA ""C"" REACTIVA   ', 'public_cost' => 240, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROTEINA ""S"" DE COAGULACION ', 'public_cost' => 2240, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'PROTEINA DE BENCE JONES ', 'public_cost' => 320, 'request' => 'Muestra de orina de cualquier hora del día.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROTEINAS EN ORINA DE 12 HORAS ', 'public_cost' => 210, 'request' => 'Muestra de orina de 12 horas en recipiente ambar proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 12 horas de recolección).

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROTEINAS EN ORINA DE 24 HORAS ', 'public_cost' => 210, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PROTEINAS SERICAS Y RELACION A/G', 'public_cost' => 170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PRUEBA CONFIRMATORIA VIH-1 Y VIH 2- Ac IgG', 'public_cost' => 2630, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'PRUEBA DE ALIENTO HELICOBACTER PYLORI', 'public_cost' => 1870, 'request' => 'Llamar al laboratorio para agendar toma de muestra. Ayuno de 10 horas, presentarse sin aseo bucal y no estar en tratamiento con antibiótico ni sales de bismuto. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => false],
            ['name' => 'PRUEBA DE AUTOHEMOLISIS', 'public_cost' => 400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PRUEBA DE PINK  ', 'public_cost' => 400, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PRUEBA DE TINTA CHINA  ', 'public_cost' => 200, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. La toma de muestra se realizar por el médico especialista, entregar muestra al laboratorio a la brevedad.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PRUEBA DE V.D.R.L. ', 'public_cost' => 170, 'request' => 'Para estos estudios se requiere ayuno de: 4 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PRUEBA INDIRECTA DE COOMBS', 'public_cost' => 240, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'PRUEBAS DE FUNCIONAMIENTO HEPATICO (PFH)', 'public_cost' => 900, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día si la toma de muestra se realiza antes de las 13:00 horas, caso contrario resultados al siguiente día.', 'process_time' => 1, 'available_outside' => true],
            ['name' => 'QUANTIFERON TB GOLD (QFT)', 'public_cost' => 2950, 'request' => 'Comunicarse al laboratorio para solicitar y agendar toma de muestra.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'QUANTOSE (RESISTENCIA A LA INSULINA)', 'public_cost' => 1400, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas, peso y talla del paciente.

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'QUIMICA SANGUINEA 6 ELEMENTOS (QS6)', 'public_cost' => 420, 'request' => 'Para estos estudios se requiere ayuno de: 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'QUIMICA SANGUINEA COMPLETA (QSC)', 'public_cost' => 350, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'QUIMICA SANGUINEA III (QS3)', 'public_cost' => 250, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'QUIMICA SANGUINEA IV (QS4)', 'public_cost' => 280, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'QUIMICA SANGUINEA Y PERFIL DE LIPIDOS (QSPL)', 'public_cost' => 780, 'request' => 'Ayuno de 12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'REACCIONES FEBRILES', 'public_cost' => 230, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'RENINA PLASMATICA  ', 'public_cost' => 1150, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'SANGRE OCULTA EN HECES (2 MUESTRAS) (SOH(2))', 'public_cost' => 350, 'request' => 'Recolectar en un recipiente estéril. 
La muestra fecal deberá ser del tamaño de una nuez o aprox. 5ml si es diarrea. 
Pacientes que usen pañal recolectar la muestra con un abatelenguas u otro utensilio limpio y depositarlo en el recipiente estéril. 
Evitar que la materia fecal se mezcle con orina. 
Evitar ingerir en las últimas 72 h medicamentos y los siguientes alimentos: Brócoli, espinacas, piña, alimentos irritantes, con exceso de grasa, picantes en especial los elaborados con chile rojo, chile y café. 
Adicional a ello evitar: vitaminas con hierro, hierro, vitamina C, Peptobismol, aspirinas (y derivados), naproxeno y diclofenaco.
En caso de 2 o 3 muestras se pueden traer por día o bien traerlas al mismo tiempo identificando cada muestra por día. 
Las muestras se pueden conservar en refrigeración.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'SANGRE OCULTA EN HECES (3 MUESTRAS) (SOH(3))', 'public_cost' => 510, 'request' => 'Recolectar en un recipiente estéril. 
La muestra fecal deberá ser del tamaño de una nuez o aprox. 5ml si es diarrea. 
Pacientes que usen pañal recolectar la muestra con un abatelenguas u otro utensilio limpio y depositarlo en el recipiente estéril. 
Evitar que la materia fecal se mezcle con orina. 
Evitar ingerir en las últimas 72 h medicamentos y los siguientes alimentos: Brócoli, espinacas, piña, alimentos irritantes, con exceso de grasa, picantes en especial los elaborados con chile rojo, chile y café. 
Adicional a ello evitar: vitaminas con hierro, hierro, vitamina C, Peptobismol, aspirinas (y derivados), naproxeno y diclofenaco.
En caso de 2 o 3 muestras se pueden traer por día o bien traerlas al mismo tiempo identificando cada muestra por día. 
Las muestras se pueden conservar en refrigeración.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'SANGRE OCULTA EN HECES (5 MUESTRAS)', 'public_cost' => 860, 'request' => 'Muestra de heces fecales del tamaño de una nuez recolectar en un recipiente estéril, evitar que se mezcle con orina (se puede traer el mismo día todas las muestras indicando el día que se tomó cada una) evitar tres días previos al estudio la ingesta de: Brócoli, espinacas, piña, mole, pozole, menudo, tamales, gorditas, carnes rojas, chorizo, chile, café. Vitaminas con hierro, hierro, vitamina C, peptobismol, aspirinas, cafiaspirinas, naproxeno y diclofenaco.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => false],
            ['name' => 'SANGRE OCULTA EN HECES (SOH)', 'public_cost' => 170, 'request' => 'Muestra de heces fecales del tamaño de una nuez recolectar en un recipiente estéril, evitar que se mezcle con orina, evitar tres días previos al estudio la ingesta de: Brócoli, espinacas, piña, mole, pozole, menudo, tamales, gorditas, carnes rojas, chorizo, chile, café. Vitaminas con hierro, hierro, vitamina C, peptobismol, aspirinas, cafiaspirinas, naproxeno y diclofenaco.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'SERIE BLANCA  ', 'public_cost' => 270, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'SERIE PLAQUETARIA ', 'public_cost' => 270, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'SERIE ROJA  ', 'public_cost' => 270, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'SEROTONINA PLASMATICA', 'public_cost' => 480, 'request' => 'Ayuno de 8 horas. Evitar el consumo de aguacate, jitomate, tomate, ciruela, berenjena, plátano, piña, kiwi, melón, pera, grosella, nuez, chocolate, te, café, tabaco y medicamentos inhibidores selectivos de la recaptación de serotonina (SSRIs) 3 días previos a la toma de muestra. 

Entrega de resultados: 11 días hábiles.', 'process_time' => 11, 'available_outside' => true],
            ['name' => 'SIROLIMUS  ', 'public_cost' => 1400, 'request' => 'Tomar la muestra antes de la dosis del medicamento, de lunes a viernes antes de las 12:00 horas.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'SODIO EN ORINA DE 24 HORAS ', 'public_cost' => 170, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'SODIO EN ORINA  ', 'public_cost' => 170, 'request' => 'Muestra de orina de cualquier hora del día.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'SODIO SÉRICO (Na)', 'public_cost' => 140, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'SOMATOMEDINA ""C"" (IGF-I)', 'public_cost' => 520, 'request' => 'Para estos estudios se requiere ayuno de: 8 a 12 horas.

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'SUB-POBLACIONES DE LINFOCITOS  ', 'public_cost' => 2800, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 
Se realiza de: lunes a jueves de 7:30 a 12:00 h.

Entrega de resultados: 8 días hábiles', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'SULFATO DE DEHIDROEPIANDROSTERONA (DHEA-S)', 'public_cost' => 1290, 'request' => 'Para estos estudios se requiere ayuno de: 12 horas.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'TACROLIMUS ', 'public_cost' => 910, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 4 días hábiles.', 'process_time' => 4, 'available_outside' => true],
            ['name' => 'TAMIZAJE DE GALACTOSEMIA (GAO Y GALT)', 'public_cost' => 950, 'request' => 'Ayuno de 8 horas. 

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'TESTOSTERONA (TEST )', 'public_cost' => 320, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TESTOSTERONA LIBRE  ', 'public_cost' => 1060, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'TESTOSTERONA LIBRE, TOTAL Y BIODISPONIBLE', 'public_cost' => 1060, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 5 días hábiles.', 'process_time' => 5, 'available_outside' => true],
            ['name' => 'TESTOSTERONA TOTAL  ', 'public_cost' => 320, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TIEMPO DE PROTROMBINA (TP)', 'public_cost' => 170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TIEMPO DE RETRACCION DEL COÁGULO ', 'public_cost' => 180, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TIEMPO DE SANGRADO (TS )', 'public_cost' => 90, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TIEMPO DE TROMBINA (TT)', 'public_cost' => 290, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TIEMPO DE TROMBOPLASTINA PARCIAL (TTPa)', 'public_cost' => 170, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TINCION DE GRAM EN LIQUIDOS BIOLOGICOS', 'public_cost' => 140, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TIROGLOBULINA (TG)', 'public_cost' => 350, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'TIROGLOBULINA Y ACS. ANTI-TIROGLOBULINA (TG Y ANTI-TG)', 'public_cost' => 990, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'TIROXINA LIBRE (T4 LIBRE) (T4L)', 'public_cost' => 230, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TIROXINA TOTAL (T4 TOTAL) (T4T)', 'public_cost' => 230, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TOPIRAMATO ', 'public_cost' => 1340, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'TOXINA SHIGA EN HECES', 'public_cost' => 1760, 'request' => 'Recolectar en un recipiente estéril 
La muestra de material fecal debe ser del tamaño de una nuez o aprox. 5ml si es diarrea.
Pacientes que usen pañal recolectar la muestra con un abatelenguas u otro utensilio limpio y depositarlo en el recipiente estéril. 
Evitar que la materia fecal se mezcle con orina. 
Traer la muestra el mismo día de su recolección 

Solo se realizan de lunes a jueves de: 7:30 a 12:00 h.

Entrega de resultados: 8 días hábiles.', 'process_time' => 8, 'available_outside' => true],
            ['name' => 'TRANSFERRINA ', 'public_cost' => 260, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'TRANSLOCACIÓN 1;19 (LAL)', 'public_cost' => 2300, 'request' => 'Para estos estudios no se requiere ayuno. Tomar la muesta de lunes a jueves antes de las 12:00 horas.

Entrega de resultados: 6 días hábiles.', 'process_time' => 6, 'available_outside' => true],
            ['name' => 'TRIGLICÉRIDOS (TGL)', 'public_cost' => 150, 'request' => 'Ayuno de12 horas.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TRIPTASA', 'public_cost' => 2200, 'request' => 'Ayuno de 8 horas. 

Entrega de resultados: 14 días hábiles.', 'process_time' => 14, 'available_outside' => true],
            ['name' => 'TRIYODOTIRONINA LIBRE (T3 LIBRE) (T3F)', 'public_cost' => 250, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'TRIYODOTIRONINA TOTAL (T3 TOTAL) (T3T)', 'public_cost' => 320, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'TROPONINA I ', 'public_cost' => 640, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'UREA EN ORINA DE 12 HORAS', 'public_cost' => 160, 'request' => 'Muestra de orina de 12 horas en recipiente ambar proporcionado por el laboratorio (descartar la primera orina del día y tomar la hora, a partir de este momento recolectar todas las micciones posteriores en el frasco, incluyendo la orina del día siguiente a la misma hora que comenzó para así cumplir las 12 horas de recolección).

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'UREA EN ORINA DE 24 HORAS', 'public_cost' => 160, 'request' => 'Se debe recolectar la orina durante 24 h. 
Se deberá desechar la primera orina de la mañana e iniciar la recolección a partir de la segunda y así durante 24 h. La recolección termina con la primera orina del día siguiente. 
Es necesario pasar al laboratorio por el recipiente especial para recolectar la muestra. Tiene un costo de $80 reembolsable al momento de pagar su estudio. 
En caso de que el paciente sea femenino, no deberá estar menstruando. 

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'UREA SÉRICA ', 'public_cost' => 130, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'UREA SERICA   ', 'public_cost' => 130, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'UREA Y CREATININA EN LIQUIDO DE DIALISIS', 'public_cost' => 230, 'request' => 'Entregar la muestra en un recipiente estéril.

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'UROCULTIVO (URO)', 'public_cost' => 370, 'request' => 'Recolectar chorro medio de la primer micción del día, en frasco estéril, previo aseo del área genital, entregar muestra dentro de la primera hora desde la recolección, no estar en tratamiento con antibiótico (esperar 5 días al finalizar tratamiento). Para paciente femenino no realizar recolección de la muestra durante el periodo menstrual. 

Entrega de resultados: 3 días naturales.', 'process_time' => 3, 'available_outside' => true],
            ['name' => 'VIGABATRINA', 'public_cost' => 7300, 'request' => '•Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

•Entrega de resultados: 18 días hábiles.', 'process_time' => 18, 'available_outside' => true],
            ['name' => 'VITAMINA ""B6"" ', 'public_cost' => 1290, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 11 días hábiles.', 'process_time' => 11, 'available_outside' => true],
            ['name' => 'VITAMINA ""E"" (VIT E)', 'public_cost' => 860, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'VITAMINA ""K""', 'public_cost' => 2060, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 10 días hábiles.', 'process_time' => 10, 'available_outside' => true],
            ['name' => 'VITAMINA C (VIT C)', 'public_cost' => 3320, 'request' => 'No requiere ayuno. No haber consumido frutas o suplementos con vitamina C en las 24 h previas a la toma de muestra. 

Entrega de resultados: 12 días hábiles.', 'process_time' => 12, 'available_outside' => true],
            ['name' => 'VITAMINA D (VIT D)', 'public_cost' => 460, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.

Entrega de resultados: el mismo día.', 'process_time' => 0, 'available_outside' => true],
            ['name' => 'VITAMINA D 1,25 (DIHIDROXICOLECALCIFEROL, D2 + D3)', 'public_cost' => 730, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial. 

Entrega de resultados: 9 días hábiles.', 'process_time' => 9, 'available_outside' => true],
            ['name' => 'YODO PROTEICO ', 'public_cost' => 230, 'request' => 'Para estos estudios no se requiere ayuno ni de alguna condición en especial.
Entrega de resultados: 3 días hábiles.', 'process_time' => 3, 'available_outside' => true],

        ];

        foreach ($services as $data) {
            //$historical = HistoricalService::create($data);
            $historical = HistoricalService::create(
                [
                    "name" => $data["name"],
                    "request" => $data["request"],
                    "public_cost" => $data["public_cost"],
                    "process_time" => $data["process_time"]
                ]
            );
            $data += ["historical_service_id" => $historical->id];
            $service = Service::create($data);
            $historical->update(["service_id" => $service->id]);
        }
    }
}

<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amazonas_cities = array('El Encanto', 'La Chorrera', 'La Pedrera', 'La Victoria', 'Leticia', 'Miriti - Paraná', 'Puerto Alegria', 'Puerto Arica', 'Puerto Nariño', 'Puerto Santander', 'Tarapacá');

        foreach ($amazonas_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 1;
            $city->save();
        }

        $antioquia_cities = array('Cáceres', 'Caucasia', 'El Bagre', 'Nechí', 'Tarazá', 'Zaragoza', 'Caracolí', 'Maceo', 'Puerto Berrio', 'Puerto Nare', 'Puerto Triunfo', 'Yondó', 'Amalfi', 'Anorí', 'Cisneros', 'Remedios', 'San Roque', 'Santo Domingo', 'Segovia', 'Vegachí', 'Yalí', 'Yolombó', 'Angostura', 'Belmira', 'Briceño', 'Campamento', 'Carolina', 'Don Matias', 'Entrerrios', 'Gómez Plata', 'Guadalupe', 'Ituango', 'San Andrés', 'San José De La Montaña', 'San Pedro', 'Santa Rosa De Osos', 'Toledo', 'Valdivia', 'Yarumal', 'Abriaquí', 'Anza', 'Armenia', 'Buriticá', 'Cañasgordas', 'Dabeiba', 'Ebéjico', 'Frontino', 'Giraldo', 'Heliconia', 'Liborina', 'Olaya', 'Peque', 'Sabanalarga', 'San Jerónimo', 'Santafé De Antioquia', 'Sopetran', 'Uramita', 'Abejorral', 'Alejandría', 'Argelia', 'Carmen De Viboral', 'Cocorná', 'Concepción', 'Granada', 'Guarne', 'Guatape', 'La Ceja', 'La Unión', 'Marinilla', 'Nariño', 'Peñol', 'Retiro', 'Rionegro', 'San Carlos', 'San Francisco', 'San Luis', 'San Rafael', 'San Vicente', 'Santuario', 'Sonson', 'Amaga', 'Andes', 'Angelopolis', 'Betania', 'Betulia', 'Caicedo', 'Caramanta', 'Ciudad Bolívar', 'Concordia', 'Fredonia', 'Hispania', 'Jardín', 'Jericó', 'La Pintada', 'Montebello', 'Pueblorrico', 'Salgar', 'Santa Barbara', 'Támesis', 'Tarso', 'Titiribí', 'Urrao', 'Valparaiso', 'Venecia', 'Apartadó', 'Arboletes', 'Carepa', 'Chigorodó', 'Murindó', 'Mutata', 'Necoclí', 'San Juan De Uraba', 'San Pedro De Uraba', 'Turbo', 'Vigía Del Fuerte', 'Barbosa', 'Bello', 'Caldas', 'Copacabana', 'Envigado', 'Girardota', 'Itagui', 'La Estrella', 'Medellín', 'Sabaneta');

        foreach ($antioquia_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 2;
            $city->save();
        }

        $arauca_cities = array('Arauca', 'Arauquita', 'Cravo Norte', 'Fortul', 'Puerto Rondón', 'Saravena', 'Tame');

        foreach ($arauca_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 3;
            $city->save();
        }

        $san_andres_cities = array('Providencia Y Santa Catalina', 'San Andres');

        foreach ($san_andres_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 4;
            $city->save();
        }

        $atlantico_cities = array('Barranquilla', 'Galapa', 'Malambo', 'Puerto Colombia', 'Soledad', 'Campo De La Cruz', 'Candelaria', 'Luruaco', 'Manati', 'Repelon', 'Santa Lucia', 'Suan', 'Baranoa', 'Palmar De Varela', 'Polonuevo', 'Ponedera', 'Sabanagrande', 'Sabanalarga', 'Santo Tomas', 'Juan De Acosta', 'Piojó', 'Tubara', 'Usiacuri');

        foreach ($atlantico_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 5;
            $city->save();
        }

        $bogota_cities = array('Bogotá');

        foreach ($bogota_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 6;
            $city->save();
        }

        $bolivar_cities = array('Cicuco', 'Hatillo De Loba', 'Margarita', 'Mompós', 'San Fernando', 'Talaigua Nuevo', 'Arjona', 'Arroyohondo', 'Calamar', 'Cartagena', 'Clemencia', 'Mahates', 'San Cristobal', 'San Estanislao', 'Santa Catalina', 'Santa Rosa De Lima', 'Soplaviento', 'Turbaco', 'Turbana', 'Villanueva', 'Altos Del Rosario', 'Barranco De Loba', 'El Peñon', 'Regidor', 'Río Viejo', 'San Martin De Loba', 'Arenal', 'Cantagallo', 'Morales', 'San Pablo', 'Santa Rosa Del Sur', 'Simití', 'Achí', 'Magangué', 'Montecristo', 'Pinillos', 'San Jacinto Del Cauca', 'Tiquisio', 'Carmen De Bolívar', 'Córdoba', 'El Guamo', 'María La Baja', 'San Jacinto', 'San Juan Nepomuceno', 'Zambrano');

        foreach ($bolivar_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 7;
            $city->save();
        }

        $boyaca_cities = array('Chíquiza', 'Chivatá', 'Cómbita', 'Cucaita', 'Motavita', 'Oicatá', 'Samacá', 'Siachoque', 'Sora', 'Soracá', 'Sotaquirá', 'Toca', 'Tunja', 'Tuta', 'Ventaquemada', 'Chiscas', 'Cubará', 'El Cocuy', 'El Espino', 'Guacamayas', 'Güicán', 'Panqueba', 'Labranzagrande', 'Pajarito', 'Paya', 'Pisba', 'Berbeo', 'Campohermoso', 'Miraflores', 'Páez', 'San Eduardo', 'Zetaquira', 'Boyacá', 'Ciénega', 'Jenesano', 'Nuevo Colón', 'Ramiriquí', 'Rondón', 'Tibaná', 'Turmequé', 'Umbita', 'Viracachá', 'Chinavita', 'Garagoa', 'Macanal', 'Pachavita', 'San Luis De Gaceno', 'Santa María', 'Boavita', 'Covarachía', 'La Uvita', 'San Mateo', 'Sativanorte', 'Sativasur', 'Soatá', 'Susacón', 'Tipacoque', 'Briceño', 'Buenavista', 'Caldas', 'Chiquinquirá', 'Coper', 'La Victoria', 'Maripí', 'Muzo', 'Otanche', 'Pauna', 'Puerto Boyaca', 'Quípama', 'Saboyá', 'San Miguel De Sema', 'San Pablo Borbur', 'Tununguá', 'Almeida', 'Chivor', 'Guateque', 'Guayatá', 'La Capilla', 'Somondoco', 'Sutatenza', 'Tenza', 'Arcabuco', 'Chitaraque', 'Gachantivá', 'Moniquirá', 'Ráquira', 'Sáchica', 'San José De Pare', 'Santa Sofía', 'Santana', 'Sutamarchán', 'Tinjacá', 'Togüí', 'Villa De Leyva', 'Aquitania', 'Cuítiva', 'Firavitoba', 'Gameza', 'Iza', 'Mongua', 'Monguí', 'Nobsa', 'Pesca', 'Sogamoso', 'Tibasosa', 'Tópaga', 'Tota', 'Belén', 'Busbanzá', 'Cerinza', 'Corrales', 'Duitama', 'Floresta', 'Paipa', 'San Rosa Viterbo', 'Tutazá', 'Betéitiva', 'Chita', 'Jericó', 'Paz De Río', 'Socha', 'Socotá', 'Tasco');

        foreach ($boyaca_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 8;
            $city->save();
        }

        $caldas_cities = array('Filadelfia', 'La Merced', 'Marmato', 'Riosucio', 'Supía', 'Manzanares', 'Marquetalia', 'Marulanda', 'Pensilvania', 'Anserma', 'Belalcázar', 'Risaralda', 'San José', 'Viterbo', 'Chinchina', 'Manizales', 'Neira', 'Palestina', 'Villamaria', 'Aguadas', 'Aranzazu', 'Pácora', 'Salamina', 'La Dorada', 'Norcasia', 'Samaná', 'Victoria');

        foreach ($caldas_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 9;
            $city->save();
        }

        
        $caqueta_cities = array('Albania', 'Belén De Los Andaquies', 'Cartagena Del Chairá', 'Currillo', 'El Doncello', 'El Paujil', 'Florencia', 'La Montañita', 'Milan', 'Morelia', 'Puerto Rico', 'San Jose Del Fragua', 'San Vicente Del Caguán', 'Solano', 'Solita', 'Valparaiso');

        foreach ($caqueta_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 10;
            $city->save();
        }

        $casanare_cities = array('Aguazul', 'Chameza', 'Hato Corozal', 'La Salina', 'Maní', 'Monterrey', 'Nunchía', 'Orocué', 'Paz De Ariporo', 'Pore', 'Recetor', 'Sabanalarga', 'Sácama', 'San Luis De Palenque', 'Támara', 'Tauramena', 'Trinidad', 'Villanueva', 'Yopal');

        foreach ($casanare_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 11;
            $city->save();
        }

        $cauca_cities = array('Cajibío', 'El Tambo', 'La Sierra', 'Morales', 'Piendamo', 'Popayán', 'Rosas', 'Sotara', 'Timbio', 'Buenos Aires', 'Caloto', 'Corinto', 'Miranda', 'Padilla', 'Puerto Tejada', 'Santander De Quilichao', 'Suarez', 'Villa Rica', 'Guapi', 'Lopez', 'Timbiqui', 'Caldono', 'Inzá', 'Jambalo', 'Paez', 'Purace', 'Silvia', 'Toribio', 'Totoro', 'Almaguer', 'Argelia', 'Balboa', 'Bolívar', 'Florencia', 'La Vega', 'Mercaderes', 'Patia', 'Piamonte', 'San Sebastian', 'Santa Rosa', 'Sucre');

        foreach ($cauca_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 12;
            $city->save();
        }

        $cesar_cities = array('Becerril', 'Chimichagua', 'Chiriguana', 'Curumaní', 'La Jagua De Ibirico', 'Pailitas', 'Tamalameque', 'Astrea', 'Bosconia', 'El Copey', 'El Paso', 'Agustín Codazzi', 'La Paz', 'Manaure', 'Pueblo Bello', 'San Diego', 'Valledupar', 'Aguachica', 'Gamarra', 'González', 'La Gloria', 'Pelaya', 'Río De Oro', 'San Alberto', 'San Martín');

        foreach ($cesar_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 13;
            $city->save();
        }

        $choco_cities = array('Atrato', 'Bagadó', 'Bojaya', 'El Carmen De Atrato', 'Lloró', 'Medio Atrato', 'Quibdó', 'Rio Quito', 'Acandí', 'Belén De Bajira', 'Carmén Del Darién', 'Riosucio', 'Unguía', 'Bahía Solano', 'Juradó', 'Nuquí', 'Alto Baudó', 'Bajo Baudó', 'El Litoral Del San Juan', 'Medio Baudó', 'Canton De San Pablo', 'Certegui', 'Condoto', 'Itsmina', 'Medio San Juan', 'Nóvita', 'Río Frío', 'San José Del Palmar', 'Sipí', 'Tadó', 'Union Panamericana');

        foreach ($choco_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 14;
            $city->save();
        }

        $cordoba_cities = array('Tierralta', 'Valencia', 'Chimá', 'Cotorra', 'Lorica', 'Momil', 'Purísima', 'Montería', 'Canalete', 'Los Córdobas', 'Moñitos', 'Puerto Escondido', 'San Antero', 'San Bernardo Del Viento', 'Chinú', 'Sahagún', 'San Andrés Sotavento', 'Ayapel', 'Buenavista', 'La Apartada', 'Montelíbano', 'Planeta Rica', 'Pueblo Nuevo', 'Puerto Libertador', 'Cereté', 'Ciénaga De Oro', 'San Carlos', 'San Pelayo');

        foreach ($cordoba_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 15;
            $city->save();
        }

        $cundinamarca_cities = array('Chocontá', 'Macheta', 'Manta', 'Sesquilé', 'Suesca', 'Tibirita', 'Villapinzón', 'Agua De Dios', 'Girardot', 'Guataquí', 'Jerusalén', 'Nariño', 'Nilo', 'Ricaurte', 'Tocaima', 'Caparrapí', 'Guaduas', 'Puerto Salgar', 'Albán', 'La Peña', 'La Vega', 'Nimaima', 'Nocaima', 'Quebradanegra', 'San Francisco', 'Sasaima', 'Supatá', 'Útica', 'Vergara', 'Villeta', 'Gachala', 'Gacheta', 'Gama', 'Guasca', 'Guatavita', 'Junín', 'La Calera', 'Ubalá', 'Beltrán', 'Bituima', 'Chaguaní', 'Guayabal De Siquima', 'Puli', 'San Juan De Río Seco', 'Vianí', 'Medina', 'Paratebueno', 'Caqueza', 'Chipaque', 'Choachí', 'Fomeque', 'Fosca', 'Guayabetal', 'Gutiérrez', 'Quetame', 'Ubaque', 'Une', 'El Peñón', 'La Palma', 'Pacho', 'Paime', 'San Cayetano', 'Topaipi', 'Villagomez', 'Yacopí', 'Cajicá', 'Chía', 'Cogua', 'Gachancipá', 'Nemocon', 'Sopó', 'Tabio', 'Tocancipá', 'Zipaquirá', 'Bojacá', 'Cota', 'El Rosal', 'Facatativá', 'Funza', 'Madrid', 'Mosquera', 'Subachoque', 'Tenjo', 'Zipacon', 'Sibaté', 'Soacha', 'Arbeláez', 'Cabrera', 'Fusagasugá', 'Granada', 'Pandi', 'Pasca', 'San Bernardo', 'Silvania', 'Tibacuy', 'Venecia', 'Anapoima', 'Anolaima', 'Apulo', 'Cachipay', 'El Colegio', 'La Mesa', 'Quipile', 'San Antonio De Tequendama', 'Tena', 'Viotá', 'Carmen De Carupa', 'Cucunubá', 'Fúquene', 'Guachetá', 'Lenguazaque', 'Simijaca', 'Susa', 'Sutatausa', 'Tausa', 'Ubate');

        foreach ($cundinamarca_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 16;
            $city->save();
        }

        $guainia_cities = array('Barranco Mina', 'Cacahual', 'Inírida', 'La Guadalupe', 'Mapiripan', 'Morichal', 'Pana Pana', 'Puerto Colombia', 'San Felipe');

        foreach ($guainia_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 17;
            $city->save();
        }

        $guaviare_cities = array('Calamar', 'El Retorno', 'Miraflores', 'San José Del Guaviare');

        foreach ($guaviare_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 18;
            $city->save();
        }

        $huila_cities = array('Agrado', 'Altamira', 'Garzón', 'Gigante', 'Guadalupe', 'Pital', 'Suaza', 'Tarqui', 'Aipe', 'Algeciras', 'Baraya', 'Campoalegre', 'Colombia', 'Hobo', 'Iquira', 'Neiva', 'Palermo', 'Rivera', 'Santa María', 'Tello', 'Teruel', 'Villavieja', 'Yaguará', 'La Argentina', 'La Plata', 'Nátaga', 'Paicol', 'Tesalia', 'Acevedo', 'Elías', 'Isnos', 'Oporapa', 'Palestina', 'Pitalito', 'Saladoblanco', 'San Agustín', 'Timaná');

        foreach ($huila_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 19;
            $city->save();
        }

        $guajira_cities = array('Albania', 'Dibulla', 'Maicao', 'Manaure', 'Riohacha', 'Uribia', 'Barrancas', 'Distraccion', 'El Molino', 'Fonseca', 'Hatonuevo', 'La Jagua Del Pilar', 'San Juan Del Cesar', 'Urumita', 'Villanueva');

        foreach ($guajira_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 20;
            $city->save();
        }

        $magdalena_cities = array('Ariguaní', 'Chibolo', 'Nueva Granada', 'Plato', 'Sabanas De San Angel', 'Tenerife', 'Algarrobo', 'Aracataca', 'Ciénaga', 'El Reten', 'Fundacion', 'Pueblo Viejo', 'Zona Bananera', 'Cerro San Antonio', 'Concordia', 'El Piñon', 'Pedraza', 'Pivijay', 'Remolino', 'Salamina', 'Sitionuevo', 'Zapayan', 'Santa Marta', 'El Banco', 'Guamal', 'Pijiño Del Carmen', 'San Sebastian De Buenavista', 'San Zenon', 'Santa Ana', 'Santa Barbara De Pinto');

        foreach ($magdalena_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 21;
            $city->save();
        }

        $meta_cities = array('El Castillo', 'El Dorado', 'Fuente De Oro', 'Granada', 'La Macarena', 'La Uribe', 'Lejanías', 'Mapiripan', 'Mesetas', 'Puerto Concordia', 'Puerto Lleras', 'Puerto Rico', 'San Juan De Arama', 'Vista Hermosa', 'Villavicencio', 'Acacias', 'Barranca De Upia', 'Castilla La Nueva', 'Cumaral', 'El Calvario', 'Guamal', 'Restrepo', 'San Carlos Guaroa', 'San Juanito', 'San Luis De Cubarral', 'San Martín', 'Cabuyaro', 'Puerto Gaitán', 'Puerto Lopez');

        foreach ($meta_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 22;
            $city->save();
        }

        $narino_cities = array('Chachagui', 'Consaca', 'El Peñol', 'El Tambo', 'La Florida', 'Nariño', 'Pasto', 'Sandoná', 'Tangua', 'Yacuanquer', 'Ancuya', 'Guaitarilla', 'La Llanada', 'Linares', 'Los Andes', 'Mallama', 'Ospina', 'Providencia', 'Ricaurte', 'Samaniego', 'Santa Cruz', 'Sapuyes', 'Tuquerres', 'Barbacoas', 'El Charco', 'Francisco Pizarro', 'La Tola', 'Magui', 'Mosquera', 'Olaya Herrera', 'Roberto Payan', 'Santa Barbara', 'Tumaco', 'Alban', 'Arboleda', 'Belen', 'Buesaco', 'Colon', 'Cumbitara', 'El Rosario', 'El Tablon De Gomez', 'La Cruz', 'La Union', 'Leiva', 'Policarpa', 'San Bernardo', 'San Lorenzo', 'San Pablo', 'San Pedro De Cartago', 'Taminango', 'Aldana', 'Contadero', 'Córdoba', 'Cuaspud', 'Cumbal', 'Funes', 'Guachucal', 'Gualmatan', 'Iles', 'Imues', 'Ipiales', 'Potosí', 'Puerres', 'Pupiales');

        foreach ($narino_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 23;
            $city->save();
        }

        $nort_santander_cities = array('Arboledas', 'Cucutilla', 'Gramalote', 'Lourdes', 'Salazar', 'Santiago', 'Villa Caro', 'Bucarasica', 'El Tarra', 'Sardinata', 'Tibú', 'Abrego', 'Cachirá', 'Convención', 'El Carmen', 'Hacarí', 'La Esperanza', 'La Playa', 'Ocaña', 'San Calixto', 'Teorama', 'Cúcuta', 'El Zulia', 'Los Patios', 'Puerto Santander', 'San Cayetano', 'Villa Del Rosario', 'Cácota', 'Chitagá', 'Mutiscua', 'Pamplona', 'Pamplonita', 'Silos', 'Bochalema', 'Chinácota', 'Durania', 'Herrán', 'Labateca', 'Ragonvalia', 'Toledo');

        foreach ($nort_santander_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 24;
            $city->save();
        }

        $putumayo_cities = array('Colón', 'Mocoa', 'Orito', 'Puerto Asis', 'Puerto Caicedo', 'Puerto Guzman', 'Puerto Leguizamo', 'San Francisco', 'San Miguel', 'Santiago', 'Sibundoy', 'Valle Del Guamuez', 'Villa Garzon');

        foreach ($putumayo_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 25;
            $city->save();
        }

        $quindio_cities = array('Armenia', 'Buenavista', 'Calarca', 'Cordoba', 'Genova', 'Pijao', 'Filandia', 'Salento', 'Circasia', 'La Tebaida', 'Montengro', 'Quimbaya');

        foreach ($quindio_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 26;
            $city->save();
        }

        $risaralda_cities = array('Dosquebradas', 'La Virginia', 'Marsella', 'Pereira', 'Santa Rosa De Cabal', 'Apía', 'Balboa', 'Belén De Umbría', 'Guática', 'La Celia', 'Quinchia', 'Santuario', 'Mistrató', 'Pueblo Rico');

        foreach ($risaralda_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 27;
            $city->save();
        }

        $santander_cities = array('Chima', 'Confines', 'Contratación', 'El Guacamayo', 'Galán', 'Gambita', 'Guadalupe', 'Guapotá', 'Hato', 'Oiba', 'Palmar', 'Palmas Del Socorro', 'Santa Helena Del Opón', 'Simacota', 'Socorro', 'Suaita', 'Capitanejo', 'Carcasí', 'Cepitá', 'Cerrito', 'Concepción', 'Enciso', 'Guaca', 'Macaravita', 'Málaga', 'Molagavita', 'San Andrés', 'San José De Miranda', 'San Miguel', 'Aratoca', 'Barichara', 'Cabrera', 'Charalá', 'Coromoro', 'Curití', 'Encino', 'Jordán', 'Mogotes', 'Ocamonte', 'Onzaga', 'Páramo', 'Pinchote', 'San Gil', 'San Joaquín', 'Valle De San José', 'Villanueva', 'Barrancabermeja', 'Betulia', 'El Carmen De Chucurí', 'Puerto Wilches', 'Sabana De Torres', 'San Vicente De Chucurí', 'Zapatoca', 'Bucaramanga', 'California', 'Charta', 'El Playón', 'Floridablanca', 'Girón', 'Lebríja', 'Los Santos', 'Matanza', 'Piedecuesta', 'Rionegro', 'Santa Bárbara', 'Surata', 'Tona', 'Vetas', 'Aguada', 'Albania', 'Barbosa', 'Bolívar', 'Chipatá', 'Cimitarra', 'El Peñón', 'Florián', 'Guavatá', 'Guepsa', 'Jesús María', 'La Belleza', 'La Paz', 'Landázuri', 'Puente Nacional', 'Puerto Parra', 'San Benito', 'Sucre', 'Vélez');

        foreach ($santander_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 28;
            $city->save();
        }

        $sucre_cities = array('Guaranda', 'Majagual', 'Sucre', 'Chalán', 'Coloso', 'Morroa', 'Ovejas', 'Sincelejo', 'Coveñas', 'Palmito', 'San Onofre', 'Santiago De Tolú', 'Tolú Viejo', 'Buenavista', 'Corozal', 'El Roble', 'Galeras', 'Los Palmitos', 'Sampués', 'San Juan Betulia', 'San Pedro', 'Sincé', 'Caimito', 'La Unión', 'San Benito Abad', 'San Marcos');

        foreach ($sucre_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 29;
            $city->save();
        }

        $tolima_cities = array('Ambalema', 'Armero', 'Falan', 'Fresno', 'Honda', 'Mariquita', 'Palocabildo', 'Carmen De Apicalá', 'Cunday', 'Icononzo', 'Melgar', 'Villarrica', 'Ataco', 'Chaparral', 'Coyaima', 'Natagaima', 'Ortega', 'Planadas', 'Rioblanco', 'Roncesvalles', 'San Antonio', 'Alvarado', 'Anzoátegui', 'Cajamarca', 'Coello', 'Espinal', 'Flandes', 'Ibague', 'Piedras', 'Rovira', 'San Luis', 'Valle De San Juan', 'Alpujarra', 'Dolores', 'Guamo', 'Prado', 'Purificación', 'Saldaña', 'Suárez', 'Casabianca', 'Herveo', 'Lerida', 'Libano', 'Murillo', 'Santa Isabel', 'Venadillo', 'Villahermosa');

        foreach ($tolima_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 30;
            $city->save();
        }

        $valle_cauca_cities = array('Andalucía', 'Buga', 'Bugalagrande', 'Calima', 'El Cerrito', 'Ginebra', 'Guacarí', 'Restrepo', 'Riofrio', 'San Pedro', 'Trujillo', 'Tuluá', 'Yotoco', 'Alcala', 'Ansermanuevo', 'Argelia', 'Bolívar', 'Cartago', 'El Águila', 'El Cairo', 'El Dovio', 'La Unión', 'La Victoria', 'Obando', 'Roldanillo', 'Toro', 'Ulloa', 'Versalles', 'Zarzal', 'Buenaventura', 'Caicedonia', 'Sevilla', 'Cali', 'Candelaria', 'Dagua', 'Florida', 'Jamundí', 'La Cumbre', 'Palmira', 'Pradera', 'Vijes', 'Yumbo');

        foreach ($valle_cauca_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 31;
            $city->save();
        }

        $vaupes_cities = array('Caruru', 'Mitú', 'Pacoa', 'Papunahua', 'Taraira', 'Yavaraté');

        foreach ($vaupes_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 32;
            $city->save();
        }

        $vichada_cities = array('Cumaribo', 'La Primavera', 'Puerto Carreño', 'Santa Rosalía');

        foreach ($vichada_cities as &$valor) {
            $city = new City();
            $city->name = $valor;
            $city->state_id = 33;
            $city->save();
        }
    }
}

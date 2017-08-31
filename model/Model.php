<?php

include_once("model/Pack.php");

class Model {
	public function getPackList() {
		return array(
			"Pacote de Ano Novo" => new Pack("Pacote de Ano Novo", "28 de dezembro à 02 de janeiro", "R$ 3450,00"),
			"Pacote Natal" => new Pack("Pacote Natal", "22 de dezembro à 26 de dezembro", "R$ 2355,00"),
			"Pacote Semanal" => new Pack("Pacote Semanal", "de segunda à sexta", "consulte diária"),
			"Pacote Final de Semana Prolongado" => new Pack("Pacote Final de Semana Prolongado", "de sexta à segunda", "consulte final de semana")
		);
	}
}

?>
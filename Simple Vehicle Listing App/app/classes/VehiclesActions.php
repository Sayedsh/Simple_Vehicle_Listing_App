<?php

interface VehiclesActions{

    function addVehicle($data);
    function editVehicle($id, $data);
    function deleteVehicle($id);
    function getVehicles();
    }

?>

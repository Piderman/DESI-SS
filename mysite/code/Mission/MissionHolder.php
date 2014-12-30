<?php

/**
 * Class MissionHolder
 *
 * MissionHolder is seen as the "programme" and groups all the missions of it
 *
 * such as the apollo progamme as holder, with "apollo 11" being a mission entry
 */
class MissionHolder extends Page {

    private static $description = "The programme for a group of related missions";

    private static $allowed_children = array(
        "MissionEntry"
    );
}

class MissionHolder_Controller extends Page_Controller {}

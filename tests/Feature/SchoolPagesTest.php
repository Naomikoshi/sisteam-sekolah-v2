<?php

it('loads the main school pages without view errors', function () {
    $this->get('/students')->assertOk();
    $this->get('/students/1')->assertOk();
    $this->get('/teachers')->assertOk();
    $this->get('/teachers/1')->assertOk();
    $this->get('/classes')->assertOk();
    $this->get('/majors')->assertOk();
});

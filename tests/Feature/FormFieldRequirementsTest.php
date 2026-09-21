<?php

it('renders teacher forms with the required status and phone_number fields', function () {
    $this->get(route('teachers.create'))
        ->assertOk()
        ->assertSee('status')
        ->assertSee('phone_number');

    $this->get(route('teachers.edit', ['id' => 1]))
        ->assertOk()
        ->assertSee('status')
        ->assertSee('phone_number');
});

it('renders class forms with grade, major_id, and teacher_id selects', function () {
    $this->get(route('classes.create'))
        ->assertOk()
        ->assertSee('grade')
        ->assertSee('major_id')
        ->assertSee('teacher_id');

    $this->get(route('classes.edit', ['id' => 1]))
        ->assertOk()
        ->assertSee('grade')
        ->assertSee('major_id')
        ->assertSee('teacher_id');
});

<?php

use Inertia\Testing\AssertableInertia;

test('home page can be load', function () {
    $response = $this->get('/');

    $response->assertOk();
    $response->assertInertia(function (AssertableInertia $page) {
        $page->component('Home');
    });
});

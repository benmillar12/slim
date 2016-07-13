<?php
// Routes


$app->get('/', function ($request, $response, $args) {
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/getuser/userid/{userId}', function ($request, $response, $args) {
    // Render index view
    return $this->renderer->render($response, 'user.phtml', $args);
});



$app->get('/getorder/orderid/{orderId}', function ($request, $response, $args) {
    // Render index view
    return $this->renderer->render($response, 'order.phtml', $args);
});



$app->get('/cancelorder/orderid/{orderId}', function ($request, $response, $args) {
    // Render index view
    return $this->renderer->render($response, 'cancelOrder.phtml', $args);
});
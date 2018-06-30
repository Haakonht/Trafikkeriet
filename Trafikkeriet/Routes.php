<?php

Route::set('', function() {
    Index::CreateView('Index');
});

Route::set('index.php', function() {
    Index::CreateView('Index');
});

Route::set('prisliste', function() {
    Prisliste::CreateView('Prisliste');
});

?>

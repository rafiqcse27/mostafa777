<?php

function btn_edit($uri) {
    return anchor($uri, '<span class="btn default btn-xs purple"><i class="fa fa-edit"></i> Edit</span>');
}

function btn_delete($uri) {
    return anchor($uri, '<span class="btn danger btn-xs red"><i class="fa fa-trash-o"></i> Delete</span>', array(
        'onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
    ));
}
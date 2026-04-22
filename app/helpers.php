<?php
function getUndoRoute($name, $resource)
{
    return request()->missing('undo') ? route($name, [$resource->id, 'undo' => true]) : null;
}

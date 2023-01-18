<?php

namespace Maggomann\FilamentOnlyIconDisplay\Domain\Tables\Actions;

use Filament\Tables\Actions\DeleteAction as ActionsDeleteAction;
use Maggomann\FilamentOnlyIconDisplay\Domain\Tables\Traits\HasOnlyIcon;

class DeleteAction extends ActionsDeleteAction
{
    use HasOnlyIcon;
}

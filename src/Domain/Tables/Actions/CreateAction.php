<?php

namespace Maggomann\FilamentOnlyIconDisplay\Domain\Tables\Actions;

use Filament\Tables\Actions\CreateAction as ActionsCreateAction;
use Maggomann\FilamentOnlyIconDisplay\Domain\Tables\Traits\HasOnlyIcon;

class CreateAction extends ActionsCreateAction
{
    use HasOnlyIcon;
}

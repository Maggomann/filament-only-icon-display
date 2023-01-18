<?php

namespace Maggomann\FilamentOnlyIconDisplay\Domain\Tables\Actions;

use Filament\Tables\Actions\EditAction as ActionsEditAction;
use Maggomann\FilamentOnlyIconDisplay\Domain\Tables\Traits\HasOnlyIcon;

class EditAction extends ActionsEditAction
{
    use HasOnlyIcon;
}

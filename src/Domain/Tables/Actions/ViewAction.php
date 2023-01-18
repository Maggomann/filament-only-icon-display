<?php

namespace Maggomann\FilamentOnlyIconDisplay\Domain\Tables\Actions;

use Filament\Tables\Actions\ViewAction as ActionsViewAction;
use Maggomann\FilamentOnlyIconDisplay\Domain\Tables\Traits\HasOnlyIcon;

class ViewAction extends ActionsViewAction
{
    use HasOnlyIcon;
}

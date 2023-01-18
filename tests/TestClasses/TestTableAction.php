<?php

namespace Maggomann\FilamentOnlyIconDisplay\Tests\TestClasses;

use Filament\Tables\Actions\Action;
use Maggomann\FilamentOnlyIconDisplay\Domain\Tables\Traits\HasOnlyIcon;

class TestTableAction extends Action
{
    use HasOnlyIcon;
}

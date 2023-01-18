<?php

use Maggomann\FilamentOnlyIconDisplay\Tests\TestClasses\TestTableAction;

it('shows the default values', function () {
    $button = TestTableAction::make('example name')
        ->label('example test')
        ->tooltip('example tooltip')
        ->icon('example icon');

    $this->assertSame($button->getLabel(), 'example test');
    $this->assertNull($button->getHiddenLabel());
    $this->assertSame($button->getIcon(), 'example icon');
    $this->assertSame($button->getTooltip(), 'example tooltip');
});

it('shows the default values from icon and tooltip', function () {
    $button = TestTableAction::make('example name')
        ->label('example test')
        ->tooltip('example tooltip')
        ->icon('example icon')
        ->onlyIconAndTooltip();

    $this->assertSame($button->getLabel(), '');
    $this->assertSame($button->getHiddenLabel(), 'example test');
    $this->assertSame($button->getIcon(), 'example icon');
    $this->assertSame($button->getTooltip(), 'example tooltip');
});

it('shows the default values from icon and tooltip regardless of the order of the method calls', function () {
    $button = TestTableAction::make('example name')
        ->onlyIconAndTooltip()
        ->label('example test')
        ->tooltip('example tooltip')
        ->icon('example icon');

    $this->assertSame($button->getLabel(), '');
    $this->assertSame($button->getHiddenLabel(), 'example test');
    $this->assertSame($button->getIcon(), 'example icon');
    $this->assertSame($button->getTooltip(), 'example tooltip');
});

it('shows the label as a tooltip if no tooltip value was transferred', function () {
    $button = TestTableAction::make('example name')
        ->onlyIconAndTooltip()
        ->label('example test')
        ->icon('example icon');

    $this->assertSame($button->getLabel(), '');
    $this->assertSame($button->getHiddenLabel(), 'example test');
    $this->assertSame($button->getIcon(), 'example icon');
    $this->assertSame($button->getTooltip(), 'example test');
});

it('shows the name as a tooltip if no tooltip value and label value was transferred', function () {
    $button = TestTableAction::make('example name')
        ->onlyIconAndTooltip()
        ->icon('example icon');

    $this->assertSame($button->getLabel(), '');
    $this->assertNull($button->getHiddenLabel());
    $this->assertSame($button->getIcon(), 'example icon');
    $this->assertSame($button->getTooltip(), 'example name');
});

it('displays only the symbol independently from all other information', function () {
    $button = TestTableAction::make('example name')
        ->onlyIcon()
        ->tooltip('example tooltip')
        ->label('example test')
        ->icon('example icon');

    $this->assertSame($button->getLabel(), '');
    $this->assertNull($button->getHiddenLabel());
    $this->assertSame($button->getIcon(), 'example icon');
    $this->assertNull($button->getTooltip());
});

it('displays only the symbol independently from all other information regardless of the order of the method calls', function () {
    $button = TestTableAction::make('example name')
        ->tooltip('example tooltip')
        ->label('example test')
        ->icon('example icon')
        ->onlyIcon();

    $this->assertSame($button->getLabel(), '');
    $this->assertNull($button->getHiddenLabel());
    $this->assertSame($button->getIcon(), 'example icon');
    $this->assertNull($button->getTooltip());
});

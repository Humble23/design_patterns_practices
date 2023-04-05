<?php

namespace Humble23\DesignPatterns\CreationalPatterns\Builder\interfaces;

interface FormBuilderInterface
{
    public function addField(string $name, ?string $value = null, ?string $type = 'text'): self;

    public function addTextField(string $name, ?string $value = null): self;

    public function addHiddenField(string $name, ?string $value = null): self;

    public function addPasswordField(string $name, ?string $value = null): self;

    public function addEmailField(string $name, ?string $value = null): self;
    
    public function addTextArea(string $name, ?string $value = null, int $rows = 4): self;
    
    public function addCheckbox(string $name, ?array $options = []): self;
    
    // public function addRadioButton(string $name, ?string $value = null): self;
    
    // public function addSubmitButton(?string $value = null): self;
    
    // public function addSelect(string $name, ?string $value = null, ?array $options = []): self;

    public function buildForm(): string;
}
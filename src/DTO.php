<?php

namespace LaravelDevKit\DesignPatterns;

use Illuminate\Support\Facades\Validator as ValidatorFacade;

class DTO
{
    /**
     * Undocumented variable
     *
     * @var Data
     */
    private Data $data;

    /**
     * Undocumented function
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = new Data(
            $data,
            $this->validate($data)->validated(),
            $this->defaults
        );
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @param mixed $value
     */
    public function __set(string $name, mixed $value)
    {
        $this->data->{$name} = $value;
    }

    /**
     * Undocumented function
     *
     * @param string $name
     * @param mixed $value
     */
    public function __get(string $name)
    {
        return $this->data->{$name};
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    protected function rules(): array
    {
        return [
            //
        ];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    protected function messages(): array
    {
        return [
            //
        ];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    protected function attributes(): array
    {
        return [
            //
        ];
    }

    /**
     * Undocumented function
     *
     * @return array
     */
    protected function defaults(): array
    {
        return [
            //
        ];
    }

    private function validate($data)
    {
        return ValidatorFacade::make(
            $data,
            $this->rules(),
            $this->messages(),
            $this->attributes()
        );
    }

    public function toArray()
    {
        return $this->data->toArray();
    }
}

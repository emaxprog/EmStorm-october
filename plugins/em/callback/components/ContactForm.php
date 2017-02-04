<?php namespace Em\Callback\Components;

use Cms\Classes\ComponentBase;
use October\Rain\Exception\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use October\Rain\Support\Facades\Flash;

class ContactForm extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'ContactForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [
            'siteName' => [
                'title' => 'Название сайта',
                'description' => 'Данное название будет выводится в сообщении',
                'default' => 'mysite',
                'type' => 'string'
            ],
            'email' => [
                'title' => 'E-mail',
                'description' => 'E-mail на который будут отсылаться сообщения',
                'default' => 'user@gmail.com',
                'type' => 'string',
            ],
            'subject' => [
                'title' => 'Тема сообщения',
                'description' => 'Тема, которая указывается в сообщении',
                'default' => 'Новая тема',
                'type' => 'string',
            ]
        ];
    }

    public function onSend()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required'
        ];

        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
            throw new ValidationException($validator);

        $vars = ['name' => post('name'), 'email' => post('email'), 'phone' => post('phone'), 'content' => post('message')];
        Mail::send('em.callback::mail.message', $vars, function ($message) {
            $message->to($this->property('email'), $this->property('siteName'));
            $message->subject($this->property('subject'));
        });

        Flash::success('Сообщение успешно отправлено!');
    }

    public function onRun()
    {
        $this->page['name'] = Input::old('name');
        $this->page['email'] = Input::old('email');
        $this->page['phone'] = Input::old('phone');
        $this->page['message'] = Input::old('message');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\contact;
use App\Models\Contacts;
use App\Models\Gallery;
use App\Models\Images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class HomeController extends Controller
{
    /**
     * Inicio
     *
     * @return void
     */
    public function index()
    {
        $pageName = 'Ínicio';
        return view('home.index', ['pageName' => $pageName]);
    }

    /**
     * Sobre
     *
     * @return void
     */
    public function about()
    {
        $pageName = 'Sobre';
        return view('about.index', ['pageName' => $pageName]);
    }

    /**
     * Contatos
     *
     * @return void
     */
    public function contact()
    {
        $pageName = 'Contato';
        return view('contact.index', ['pageName' => $pageName]);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    public function feature()
    {
        $pageName = 'Contato';
        return view('feature.index', ['pageName' => $pageName]);
    }

    /**
     * Preços
     *
     * @return void
     */
    public function price()
    {
        $pageName = 'Preço';
        return view('price.index', ['pageName' => $pageName]);
    }

    /**
     * Cotas
     *
     * @return void
     */
    public function quote()
    {
        $pageName = 'Preço';
        return view('quote.index', ['pageName' => $pageName]);
    }

    /**
     * Serviços
     *
     * @return void
     */
    public function service()
    {
        $pageName = 'Serviços';
        return view('service.index', ['pageName' => $pageName]);
    }

    /**
     * Time
     *
     * @return void
     */
    public function team()
    {
        $pageName = 'Equipe';
        return view('team.index', ['pageName' => $pageName]);
    }

    /**
     * Envia o email de contato.
     *
     * @param Request $request
     * @return void
     */
    public function sendEmailContact(Request $request)
    {
        $data = $request->all();

        /* informações do usuario. */
        $user        = new stdClass();
        $user->email = 'wendelulhoa@gmail.com';
        $user->name  = 'wendel ulhoa';

        /* informações do contato. */
        $contact           = new stdClass();
        $contact->name     = $data['name'] ?? '';
        $contact->email    = $data['email'] ?? '';
        $contact->subject  = $data['subject'] ?? '';
        $contact->phone    = $data['phone'] ?? '';
        $contact->message  = $data['message'] ?? '';

        /* Enviando e-mail com informações de contato. */
        $mailTo   = $user->email;
        $subject  = $data['subject'];
        
        $mail = Mail::send('emails.contact', [
            'name'     => $contact->name,
            'email'    => $contact->email,
            'subject'  => $contact->subject,
            'phone'    => $contact->phone,
            'body'     => $contact->message,
            'mailTo'   => $mailTo,
        ], function ($mail) use ($mailTo, $subject, $user) {
            $mail->to($user->email, 'alceu mudanças')
            ->replyTo($mailTo)
                ->subject($subject);
        });

        return redirect('contact');
    }
}

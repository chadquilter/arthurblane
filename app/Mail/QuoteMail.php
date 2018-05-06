<?php

namespace App\Mail;

use App\Quote;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class QuoteMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $quote;

    public function __construct(Quote $quote)
    {
        $this->quote = $quote;
        $to = explode(',', env('ADMIN_EMAILS'));
        $this->to($to);
        $this->from('mikegrounds@bamconstruction.net', 'Mike Grounds');
        $this->replyto('mikegrounds@bamconstruction.net', 'Mike Grounds');
        $this->subject('Hello '.$this->quote->title.' has contacted Bam Construction!');

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $quote_date = Carbon::now()->toDateTimeString();
        return $this->view('emails.quotes')
            ->with([
                'quoteTitle' => $this->quote->title,
                'quotePhone' => $this->quote->phone,
                'quoteEmail' => $this->quote->email,
                'quoteDescription' => $this->quote->description,
                'quoteNotes' => $this->quote->notes,
                'quoteDate' => $quote_date,
            ]);
    }
}

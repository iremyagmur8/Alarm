<p>
    {{config()->get("solaris.site.name")}} iletişim sayfasından mesaj aldınız.
</p>


<p>
  <b>Ad : </b>  {{request("name")}}
</p>
<p>
    <b>Mail : </b>  {{request("mail")}}
</p>
<p>
    <b>Telefon No : </b>  {{request("phonenumber")}}
</p>
<p>
    <b>Mesaj : </b>  {{request("message")}}
</p>

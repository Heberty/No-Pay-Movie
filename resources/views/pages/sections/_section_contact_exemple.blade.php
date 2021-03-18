<section class="section-contact" id="fale-conosco">
    <div class="text-right mb40 ml40"><img src="{{ asset('images/min/bg-grid.svg') }}" alt="" class="img-fluid"></div>
    <div class="container">
        <div class="row">
            <div class="col-2 col-lg-1 d-flex align-items-center">
                <div class="bar-section"></div>
            </div>
            <div class="col-10 col-lg-5 d-flex flex-column justify-content-center">
                <h1 class="title-section">Fale conosco</h1>
                <div class="text-area">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus a tellus lectus. Praesent vitae turpis eget dolor finibus auctor</p>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <form action="{{ route('send') }}" class="form-site" method="post">
                    {{ csrf_field() }}
                    @if ($message = Session::get('success'))
                    <div class="box-success-message alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong class="success-message">{{ $message }}</strong>
                    </div>
                    @endif
                    <div class="row text-lg-right justify-content-lg-end">
                        <div class="form-group col-12">
                            <label for="name" class="form-label">Nome</label>
                            <input id="name" name="name" type="text" class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" value="{{ old('name') }}" placeholder="Ex.: Rozana Puccini Oliveira">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input id="email" name="email" type="text" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" value="{{ old('email') }}" placeholder="Ex.: contato@rozanapuccini.com.br">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-12 col-lg-6">
                            <label for="phone" class="form-label">Telefone</label>
                            <input id="phone" name="phone" type="text" class="sp_celphones form-control {{ $errors->has('phone') ? ' has-error' : '' }}" value="{{ old('phone') }}" placeholder="Ex.: (xx) xxxxx-xxxx">

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-12 col-lg-8">
                            <label for="subject" class="form-label">Assunto</label>
                            <input id="subject" name="subject" type="text" class="form-control {{ $errors->has('subject') ? ' has-error' : '' }}" value="{{ old('subject') }}" placeholder="Ex.: Cortina">

                            @if ($errors->has('subject'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('subject') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <label for="message" class="form-label">Mensagem</label>
                            <textarea name="message" id="message" placeholder="Ex.: Olá, gostaria de falar sobre cortinas" class="form-control {{ $errors->has('message') ? ' has-error' : '' }}">{{ old('message') }}</textarea>

                            @if ($errors->has('message'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group col-12">
                            <button class="btn-site yellow">Enviar <img src="{{ asset('images/min/arrow-right-white.svg') }}" alt=""></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="text-left mt40 mr40"><img src="{{ asset('images/min/bg-grid.svg') }}" alt="" class="img-fluid"></div>
</section>
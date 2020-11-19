<div class="viewed-pets">
    <h2>@lang('messages.component_viewed_pets_title')</h2>
        <div class="row">
            <div class="col">
                @if (!empty($pets))
            
                @else
                    <div class="viewed-pets-wrapper row no-gutters">
                        <div class="viewed-pets-logo col-md-3">
                            <img src="{{ asset('/images/logo-large.svg') }}" class="viewed-pets-logo-img" alt="Лого котопёс"/>
                        </div>
                        <div class="viewed-pets-text col-md-6">
                            <p>
                                @lang('messages.component_viewed_pets_no_found')
                            </p>
                            <p>
                                @lang('messages.component_viewed_pets_suggestion')
                            </p>
                        </div>
                        <div class="col-md-3">

                        </div>
                </div>
                @endif
            </div>
        </div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
</div>
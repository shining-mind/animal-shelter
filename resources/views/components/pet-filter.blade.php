<form class="pet-filter" action="{{$action ?? ''}}" method="GET">
    <div class="pet-filter-row">
        <input type="radio" name="type" value="all" id="pet-filter-type-all" checked>
        <label for="pet-filter-type-all">@lang('components.pet_filter_type_all')</label>
        <input type="radio" name="type" value="dogs" id="pet-filter-type-dogs">
        <label for="pet-filter-type-dogs">@lang('components.pet_filter_type_dogs')</label>
        <input type="radio" name="type" value="cats" id="pet-filter-type-cats">
        <label for="pet-filter-type-cats">@lang('components.pet_filter_type_cats')</label>
        <input type="radio" name="type" value="other" id="pet-filter-type-other">
        <label for="pet-filter-type-other">@lang('components.pet_filter_type_other')</label>
    </div>
    <div class="pet-filter-row">
        <input type="radio" name="sex" value="any" id="pet-filter-sex-any" checked>
        <label for="pet-filter-sex-any">@lang('components.pet_filter_sex_any')</label>
        <input type="radio" name="sex" value="male" id="pet-filter-sex-male">
        <label for="pet-filter-sex-male">@lang('components.pet_filter_sex_male')</label>
        <input type="radio" name="sex" value="female" id="pet-filter-sex-female">
        <label for="pet-filter-sex-female">@lang('components.pet_filter_sex_female')</label>
    </div>
    <div class="pet-filter-row">
        <input type="radio" name="age" value="any" id="pet-filter-age-any" checked>
        <label for="pet-filter-age-any">@lang('components.pet_filter_age_any')</label>
        <input type="radio" name="age" value="junior" id="pet-filter-age-junior">
        <label for="pet-filter-age-junior">@lang('components.pet_filter_age_junior')</label>
        <input type="radio" name="age" value="young" id="pet-filter-age-young">
        <label for="pet-filter-age-young">@lang('components.pet_filter_age_young')</label>
        <input type="radio" name="age" value="senior" id="pet-filter-age-senior">
        <label for="pet-filter-age-senior">@lang('components.pet_filter_age_senior')</label>
    </div>
    <footer class="pet-filter-footer">
        <button class="btn btn-search">@lang('messages.search')</button>
    </footer>
</form>
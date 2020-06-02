    <p>
    <label class="form=label" for="name"> City Name </label>
    <input calss="form-input" type="text" name="name" id="name" value="{{old('name', $city->name)}}">
    </p>
    <p>
    <label class="form=label" for="state"> State </label>
    <input calss="form-input" type="text" name="state" id="state" value="{{old('state', $city->state)}}">
    </p>
    <p>
    <label class="form=label" for="population_2010"> City Population </label>
    <input calss="form-input" type="integer" name="population_2010" id="population_2010" value="{{old('population_2010' ,$city->population_2010)}}">
    </p>
    <p>
    <label class="form=label" for="population_rank"> City Population Rank </label>
    <input calss="form-input" type="integer" name="population_rank" id="population_rank" value="{{old('population_rank', $city->population_rank)}}">
    </p>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{route('citys.index')}}">cancel</a>
    </div>
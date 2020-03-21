<div class="row justify-content-center">
	@csrf
    <div class="col-12 col-sm10 col-lg-8">
        <div class="card">
            <div class="card-header">
            </div>
            <form>
            	<div class="col-12">
					<div class="form-group py-1 px-2">
						<label for="title"><strong>Título del Proyecto:</label>
						<input id="title" class="form-control" type="text" name="title" value="{{old('title',$projects->title)}}">
					</div>
					<div class="form-group py-1 px-2">
						<label for="description">Descripción :
						</label>
							<textarea id="description"  class="form-control"  name="description" cols="100" rows="5">{{old ('description',$projects->description)}}</textarea>
					</div>
					<div class="form-group py-1 px-2">
						<label for="url">URL :<br>
						</label>
							<input id="url" class="form-control"  type="text" name="url"value="{{old ('url',$projects->url)}}">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
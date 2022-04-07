<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Settings
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" wire:submit.prevent="saveSettings">
                            <div class="form-group">
                                <label  class="col-md-4 control-label">Email</label>
                                <div class="col-md-4">
                                    <input type="email" placeholder="Email" class="form-control input-md" wire:model="email">
                                    @error('email') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">phone</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="phome" class="form-control input-md" wire:model="pone">
                                    @error('phone') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">phone2</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="phone 2" class="form-control input-md" wire:model="phone2">
                                    @error('phone2') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">Address</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="address" class="form-control input-md" wire:model="address">
                                    @error('address') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">map</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="map" class="form-control input-md" wire:model="map">
                                    @error('map') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">facebook</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="facebook" class="form-control input-md" wire:model="facebook">
                                    @error('facebook') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">twetter</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="twetter" class="form-control input-md" wire:model="twitter">
                                    @error('twitter') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">piterest</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="piterest" class="form-control input-md" wire:model="piterest">
                                    @error('piterest') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">instagram</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="instagram" class="form-control input-md" wire:model="instagram">
                                    @error('instagram') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label">youtube</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="youtube" class="form-control input-md" wire:model="youtube">
                                    @error('youtube') <p class="text-danger">{{$message}}</p>@enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label  class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

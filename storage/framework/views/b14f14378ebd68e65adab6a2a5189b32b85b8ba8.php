
<style>
    h2{
        color: navy;
    }
</style>
<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Profile</h1>
    <div class="card">
        <div class="card-header">
            Profile Details
        </div>
        <div class="card-body">
            <form method="POST" action="<?php echo e(route('profile.updateProfileInformation')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-section">
                    <h2>About You</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" class="form-control">
                                    <option value="male" <?php echo e(Auth::user()->gender == 'male' ? 'selected' : ''); ?>>Male</option>
                                    <option value="female" <?php echo e(Auth::user()->gender == 'female' ? 'selected' : ''); ?>>Female</option>
                                    <option value="other" <?php echo e(Auth::user()->gender == 'other' ? 'selected' : ''); ?>>Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="preferred_language">Preferred Language</label>
                                <select id="preferred_language" name="preferred_language" class="form-control">
                                    <option value="english" <?php echo e(Auth::user()->preferred_language == 'english' ? 'selected' : ''); ?>>English</option>
                                    <option value="dutch" <?php echo e(Auth::user()->preferred_language == 'dutch' ? 'selected' : ''); ?>>Dutch</option>
                                    <option value="french" <?php echo e(Auth::user()->preferred_language == 'french' ? 'selected' : ''); ?>>French</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="favourite_player">Favourite Player</label>
                                <select id="favourite_player" name="favourite_player" class="form-control">
                                    <option value="nathan_ake" <?php echo e(Auth::user()->favourite_player == 'nathan_ake' ? 'selected' : ''); ?>>Nathan Ake</option>
                                    <option value="kevin_de_bruyne" <?php echo e(Auth::user()->favourite_player == 'kevin_de_bruyne' ? 'selected' : ''); ?>>Kevin De Bruyne</option>
                                    <option value="phil_foden" <?php echo e(Auth::user()->favourite_player == 'phil_foden' ? 'selected' : ''); ?>>Phil Foden</option>
                                    <option value="sergio_gomez" <?php echo e(Auth::user()->favourite_player == 'sergio_gomez' ? 'selected' : ''); ?>>Sergio Gomez</option>
                                    <option value="ederson" <?php echo e(Auth::user()->favourite_player == 'ederson' ? 'selected' : ''); ?>>Ederson</option>
                                    <option value="erling_haaland" <?php echo e(Auth::user()->favourite_player == 'erling_haaland' ? 'selected' : ''); ?>>Erling Haaland</option>
                                    <option value="manuel_akanji" <?php echo e(Auth::user()->favourite_player == 'manuel_akanji' ? 'selected' : ''); ?>>Manuel Akanji</option>
                                    <option value="kyle_walker" <?php echo e(Auth::user()->favourite_player == 'kyle_walker' ? 'selected' : ''); ?>>Kyle Walker</option>
                                    <option value="stefan_ortega_moreno" <?php echo e(Auth::user()->favourite_player == 'stefan_ortega_moreno' ? 'selected' : ''); ?>>Stefan Ortega Moreno</option>
                                    <option value="scott_carson" <?php echo e(Auth::user()->favourite_player == 'scott_carson' ? 'selected' : ''); ?>>Scott Carson</option>
                                    <option value="bernardo_silva" <?php echo e(Auth::user()->favourite_player == 'bernardo_silva' ? 'selected' : ''); ?>>Bernardo Silva</option>
                                    <option value="rodri" <?php echo e(Auth::user()->favourite_player == 'rodri' ? 'selected' : ''); ?>>Rodri</option>
                                    <option value="julian_alavarez" <?php echo e(Auth::user()->favourite_player == 'julian_alavarez' ? 'selected' : ''); ?>>Julian Alvarez</option>
                                    <option value="ruben_dias" <?php echo e(Auth::user()->favourite_player == 'ruben_dias' ? 'selected' : ''); ?>>Ruben Dias</option>
                                    <option value="rico_lewis" <?php echo e(Auth::user()->favourite_player == 'rico_lewis' ? 'selected' : ''); ?>>Rico Lewis</option>
                                    <option value="john_stones" <?php echo e(Auth::user()->favourite_player == 'john_stones' ? 'selected' : ''); ?>>John Stones</option>
                                    <option value="josko_gvardiol" <?php echo e(Auth::user()->favourite_player == 'josko_gvardiol' ? 'selected' : ''); ?>>Josko gvardiol</option>
                                    <option value="matheus_nunes" <?php echo e(Auth::user()->favourite_player == 'matheus_nunes' ? 'selected' : ''); ?>>Matheus Nunes</option>
                                    <option value="oscar_bobb" <?php echo e(Auth::user()->favourite_player == 'oscar_bobb' ? 'selected' : ''); ?>>Oscar Bobb</option>
                                    <option value="mateo_kovacic" <?php echo e(Auth::user()->favourite_player == 'mateo_kovacic' ? 'selected' : ''); ?>>Mateo Kovacic</option>
                                    <option value="jack_grealish" <?php echo e(Auth::user()->favourite_player == 'jack_grealish' ? 'selected' : ''); ?>>Jack Grealish</option>
                                    <option value="jeremy_doku" <?php echo e(Auth::user()->favourite_player == 'jeremy_doku' ? 'selected' : ''); ?>>Jeremy Doku</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ethnicity">Ethnicity</label>
                                <select id="ethnicity" name="ethnicity" class="form-control">
                                    <option value="prefer_not_to_say" <?php echo e(Auth::user()->ethnicity == 'prefer_not_to_say' ? 'selected' : ''); ?>>Prefer not to say</option>
                                    <option value="asian" <?php echo e(Auth::user()->ethnicity == 'asian' ? 'selected' : ''); ?>>Asian</option>
                                    <option value="black" <?php echo e(Auth::user()->ethnicity == 'black' ? 'selected' : ''); ?>>Black</option>
                                    <option value="white" <?php echo e(Auth::user()->ethnicity == 'white' ? 'selected' : ''); ?>>White</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nickname">Nickname</label>
                                <input type="text" id="nickname" name="nickname" class="form-control" value="<?php echo e(Auth::user()->nickname); ?>">
                            </div>
                            <div class="form-group">
                                <label for="fan_since">Fan Since</label>
                                <input type="text" id="fan_since" name="fan_since" class="form-control" value="<?php echo e(Auth::user()->fan_since); ?>">
                            </div>
                            <div class="form-group">
                                <label for="lgbtq_community">LGBTQ Community</label>
                                <select id="lgbtq_community" name="lgbtq_community" class="form-control">
                                    <option value="yes" <?php echo e(Auth::user()->lgbtq_community == 'yes' ? 'selected' : ''); ?>>Yes</option>
                                    <option value="no" <?php echo e(Auth::user()->lgbtq_community == 'no' ? 'selected' : ''); ?>>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h2>Address</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country">Country</label>
                                <select id="country" name="country" class="form-control">
                                    <option value="belgium" <?php echo e(Auth::user()->country == 'belgium' ? 'selected' : ''); ?>>Belgium</option>
                                    <option value="netherlands" <?php echo e(Auth::user()->country == 'netherlands' ? 'selected' : ''); ?>>Netherlands</option>
                                    <option value="germany" <?php echo e(Auth::user()->country == 'germany' ? 'selected' : ''); ?>>Germany</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="address_line_1">Address Line 1</label>
                                <input type="text" id="address_line_1" name="address_line_1" class="form-control" value="<?php echo e(Auth::user()->address_line_1); ?>">
                            </div>
                            <div class="form-group">
                                <label for="address_line_3">Address Line 3 (Optional)</label>
                                <input type="text" id="address_line_3" name="address_line_3" class="form-control" value="<?php echo e(Auth::user()->address_line_3); ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address_line_2">Address Line 2 (Optional)</label>
                                <input type="text" id="address_line_2" name="address_line_2" class="form-control" value="<?php echo e(Auth::user()->address_line_2); ?>">
                            </div>
                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" id="city" name="city" class="form-control" value="<?php echo e(Auth::user()->city); ?>">
                            </div>
                            <div class="form-group">
                                <label for="postcode">Post Code / ZIP Code</label>
                                <input type="text" id="postcode" name="postcode" class="form-control" value="<?php echo e(Auth::user()->postcode); ?>">
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save Changes</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mozes\projectLaravel\resources\views/profile/profile.blade.php ENDPATH**/ ?>
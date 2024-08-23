 <?php $__env->startSection('content'); ?>
<div class="row mb-5">
    <div class="col-12">
        <div class="multisteps-form mb-5">
            <div class="row">
                <div class="col-12 col-lg-12 m-auto">
                    <div class="card card-body" id="profile">
                      <div class="row justify-content-center align-items-center">
                          <div class="col-sm-auto col-4">
                            <div class="avatar avatar-xl position-relative">
                                <img src="<?php echo e(url('admin/assets/img/2503742.png')); ?>" alt="" class="w-100 border-radius-lg shadow-sm">
                            </div>
                          </div>
                          <div class="col-sm-auto col-8 my-auto">
                            <div class="h-100">
                                <h5 class="mb-1 font-weight-bolder">
                                <?php echo e($organization['name']); ?>

                                </h5>
                                <p class="mb-0 font-weight-bold text-sm">
                                <?php echo e($organization['city']); ?> - <?php echo e($organization['country_id']); ?>

                                </p>
                            </div>
                          </div>
                          <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                            <label class="form-check-label mb-0">
                            <small id="profileVisibility">
                            Deactivate
                            </small>
                            </label>
                            <div class="form-check form-switch ms-2">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked onchange="visible()">
                            </div>
                          </div>
                      </div>
                    </div>

                    <form class="multisteps-form__form mt-4 mb-8" action="<?php echo e(route('organizations.update', $organization['id'])); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                            <h5 class="font-weight-bolder mb-0">Edit Organization Information</h5>
                            <!-- <p class="mb-0 text-sm">Major informations</p> -->
                            <div class="multisteps-form__content">
                                
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Organization Name <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="name" id="name" placeholder="eg. Qotz Application" value="<?php echo e($organization['name']); ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <label>Country <?php $__errorArgs = ['country_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <select name="country_id" id="country_id" class="multisteps-form__input form-control">
                                            <option value="">Select Country</option>
                                            <option value="AF" <?php echo e($organization['country_id'] == 'AF' ? 'selected' : ''); ?>>Afghanistan</option>
                                            <option value="AL" <?php echo e($organization['country_id'] == 'AL' ? 'selected' : ''); ?>>Albania</option>
                                            <option value="DZ" <?php echo e($organization['country_id'] == 'DZ' ? 'selected' : ''); ?>>Algeria</option>
                                            <option value="AS" <?php echo e($organization['country_id'] == 'AS' ? 'selected' : ''); ?>>American Samoa</option>
                                            <option value="AD" <?php echo e($organization['country_id'] == 'AD' ? 'selected' : ''); ?>>Andorra</option>
                                            <option value="AO" <?php echo e($organization['country_id'] == 'AO' ? 'selected' : ''); ?>>Angola</option>
                                            <option value="AI" <?php echo e($organization['country_id'] == 'AI' ? 'selected' : ''); ?>>Anguilla</option>
                                            <option value="AG" <?php echo e($organization['country_id'] == 'AG' ? 'selected' : ''); ?>>Antigua and Barbuda</option>
                                            <option value="AR" <?php echo e($organization['country_id'] == 'AR' ? 'selected' : ''); ?>>Argentina</option>
                                            <option value="AM" <?php echo e($organization['country_id'] == 'AM' ? 'selected' : ''); ?>>Armenia</option>
                                            <option value="AW" <?php echo e($organization['country_id'] == 'AW' ? 'selected' : ''); ?>>Aruba</option>
                                            <option value="AU" <?php echo e($organization['country_id'] == 'AU' ? 'selected' : ''); ?>>Australia</option>
                                            <option value="AT" <?php echo e($organization['country_id'] == 'AT' ? 'selected' : ''); ?>>Austria</option>
                                            <option value="AZ" <?php echo e($organization['country_id'] == 'AZ' ? 'selected' : ''); ?>>Azerbaijan</option>
                                            <option value="BS" <?php echo e($organization['country_id'] == 'BS' ? 'selected' : ''); ?>>Bahamas</option>
                                            <option value="BH" <?php echo e($organization['country_id'] == 'BH' ? 'selected' : ''); ?>>Bahrain</option>
                                            <option value="BD" <?php echo e($organization['country_id'] == 'BD' ? 'selected' : ''); ?>>Bangladesh</option>
                                            <option value="BB" <?php echo e($organization['country_id'] == 'BB' ? 'selected' : ''); ?>>Barbados</option>
                                            <option value="BY" <?php echo e($organization['country_id'] == 'BY' ? 'selected' : ''); ?>>Belarus</option>
                                            <option value="BE" <?php echo e($organization['country_id'] == 'BE' ? 'selected' : ''); ?>>Belgium</option>
                                            <option value="BZ" <?php echo e($organization['country_id'] == 'BZ' ? 'selected' : ''); ?>>Belize</option>
                                            <option value="BJ" <?php echo e($organization['country_id'] == 'BJ' ? 'selected' : ''); ?>>Benin</option>
                                            <option value="BM" <?php echo e($organization['country_id'] == 'BM' ? 'selected' : ''); ?>>Bermuda</option>
                                            <option value="BT" <?php echo e($organization['country_id'] == 'BT' ? 'selected' : ''); ?>>Bhutan</option>
                                            <option value="BO" <?php echo e($organization['country_id'] == 'BO' ? 'selected' : ''); ?>>Bolivia</option>
                                            <option value="BA" <?php echo e($organization['country_id'] == 'BA' ? 'selected' : ''); ?>>Bosnia and Herzegovina</option>
                                            <option value="BW" <?php echo e($organization['country_id'] == 'BW' ? 'selected' : ''); ?>>Botswana</option>
                                            <option value="BR" <?php echo e($organization['country_id'] == 'BR' ? 'selected' : ''); ?>>Brazil</option>
                                            <option value="BN" <?php echo e($organization['country_id'] == 'BN' ? 'selected' : ''); ?>>Brunei</option>
                                            <option value="BG" <?php echo e($organization['country_id'] == 'BG' ? 'selected' : ''); ?>>Bulgaria</option>
                                            <option value="BF" <?php echo e($organization['country_id'] == 'BF' ? 'selected' : ''); ?>>Burkina Faso</option>
                                            <option value="BI" <?php echo e($organization['country_id'] == 'BI' ? 'selected' : ''); ?>>Burundi</option>
                                            <option value="KH" <?php echo e($organization['country_id'] == 'KH' ? 'selected' : ''); ?>>Cambodia</option>
                                            <option value="CM" <?php echo e($organization['country_id'] == 'CM' ? 'selected' : ''); ?>>Cameroon</option>
                                            <option value="CA" <?php echo e($organization['country_id'] == 'CA' ? 'selected' : ''); ?>>Canada</option>
                                            <option value="CV" <?php echo e($organization['country_id'] == 'CV' ? 'selected' : ''); ?>>Cape Verde</option>
                                            <option value="KY" <?php echo e($organization['country_id'] == 'KY' ? 'selected' : ''); ?>>Cayman Islands</option>
                                            <option value="CF" <?php echo e($organization['country_id'] == 'CF' ? 'selected' : ''); ?>>Central African Republic</option>
                                            <option value="TD" <?php echo e($organization['country_id'] == 'TD' ? 'selected' : ''); ?>>Chad</option>
                                            <option value="CL" <?php echo e($organization['country_id'] == 'CL' ? 'selected' : ''); ?>>Chile</option>
                                            <option value="CN" <?php echo e($organization['country_id'] == 'CN' ? 'selected' : ''); ?>>China</option>
                                            <option value="CO" <?php echo e($organization['country_id'] == 'CO' ? 'selected' : ''); ?>>Colombia</option>
                                            <option value="KM" <?php echo e($organization['country_id'] == 'KM' ? 'selected' : ''); ?>>Comoros</option>
                                            <option value="CG" <?php echo e($organization['country_id'] == 'CG' ? 'selected' : ''); ?>>Congo - Brazzaville</option>
                                            <option value="CD" <?php echo e($organization['country_id'] == 'CD' ? 'selected' : ''); ?>>Congo - Kinshasa</option>
                                            <option value="CR" <?php echo e($organization['country_id'] == 'CR' ? 'selected' : ''); ?>>Costa Rica</option>
                                            <option value="CI" <?php echo e($organization['country_id'] == 'CI' ? 'selected' : ''); ?>>Côte d’Ivoire</option>
                                            <option value="HR" <?php echo e($organization['country_id'] == 'HR' ? 'selected' : ''); ?>>Croatia</option>
                                            <option value="CU" <?php echo e($organization['country_id'] == 'CU' ? 'selected' : ''); ?>>Cuba</option>
                                            <option value="CY" <?php echo e($organization['country_id'] == 'CY' ? 'selected' : ''); ?>>Cyprus</option>
                                            <option value="CZ" <?php echo e($organization['country_id'] == 'CZ' ? 'selected' : ''); ?>>Czech Republic</option>
                                            <option value="DK" <?php echo e($organization['country_id'] == 'DK' ? 'selected' : ''); ?>>Denmark</option>
                                            <option value="DJ" <?php echo e($organization['country_id'] == 'DJ' ? 'selected' : ''); ?>>Djibouti</option>
                                            <option value="DM" <?php echo e($organization['country_id'] == 'DM' ? 'selected' : ''); ?>>Dominica</option>
                                            <option value="DO" <?php echo e($organization['country_id'] == 'DO' ? 'selected' : ''); ?>>Dominican Republic</option>
                                            <option value="EC" <?php echo e($organization['country_id'] == 'EC' ? 'selected' : ''); ?>>Ecuador</option>
                                            <option value="EG" <?php echo e($organization['country_id'] == 'EG' ? 'selected' : ''); ?>>Egypt</option>
                                            <option value="SV" <?php echo e($organization['country_id'] == 'SV' ? 'selected' : ''); ?>>El Salvador</option>
                                            <option value="GQ" <?php echo e($organization['country_id'] == 'GQ' ? 'selected' : ''); ?>>Equatorial Guinea</option>
                                            <option value="ER" <?php echo e($organization['country_id'] == 'ER' ? 'selected' : ''); ?>>Eritrea</option>
                                            <option value="EE" <?php echo e($organization['country_id'] == 'EE' ? 'selected' : ''); ?>>Estonia</option>
                                            <option value="SZ" <?php echo e($organization['country_id'] == 'SZ' ? 'selected' : ''); ?>>Eswatini</option>
                                            <option value="ET" <?php echo e($organization['country_id'] == 'ET' ? 'selected' : ''); ?>>Ethiopia</option>
                                            <option value="FJ" <?php echo e($organization['country_id'] == 'FJ' ? 'selected' : ''); ?>>Fiji</option>
                                            <option value="FI" <?php echo e($organization['country_id'] == 'FI' ? 'selected' : ''); ?>>Finland</option>
                                            <option value="FR" <?php echo e($organization['country_id'] == 'FR' ? 'selected' : ''); ?>>France</option>
                                            <option value="GA" <?php echo e($organization['country_id'] == 'GA' ? 'selected' : ''); ?>>Gabon</option>
                                            <option value="GM" <?php echo e($organization['country_id'] == 'GM' ? 'selected' : ''); ?>>Gambia</option>
                                            <option value="GE" <?php echo e($organization['country_id'] == 'GE' ? 'selected' : ''); ?>>Georgia</option>
                                            <option value="DE" <?php echo e($organization['country_id'] == 'DE' ? 'selected' : ''); ?>>Germany</option>
                                            <option value="GH" <?php echo e($organization['country_id'] == 'GH' ? 'selected' : ''); ?>>Ghana</option>
                                            <option value="GR" <?php echo e($organization['country_id'] == 'GR' ? 'selected' : ''); ?>>Greece</option>
                                            <option value="GD" <?php echo e($organization['country_id'] == 'GD' ? 'selected' : ''); ?>>Grenada</option>
                                            <option value="GU" <?php echo e($organization['country_id'] == 'GU' ? 'selected' : ''); ?>>Guam</option>
                                            <option value="GT" <?php echo e($organization['country_id'] == 'GT' ? 'selected' : ''); ?>>Guatemala</option>
                                            <option value="GN" <?php echo e($organization['country_id'] == 'GN' ? 'selected' : ''); ?>>Guinea</option>
                                            <option value="GW" <?php echo e($organization['country_id'] == 'GW' ? 'selected' : ''); ?>>Guinea-Bissau</option>
                                            <option value="GY" <?php echo e($organization['country_id'] == 'GY' ? 'selected' : ''); ?>>Guyana</option>
                                            <option value="HT" <?php echo e($organization['country_id'] == 'HT' ? 'selected' : ''); ?>>Haiti</option>
                                            <option value="HN" <?php echo e($organization['country_id'] == 'HN' ? 'selected' : ''); ?>>Honduras</option>
                                            <option value="HU" <?php echo e($organization['country_id'] == 'HU' ? 'selected' : ''); ?>>Hungary</option>
                                            <option value="IS" <?php echo e($organization['country_id'] == 'IS' ? 'selected' : ''); ?>>Iceland</option>
                                            <option value="IN" <?php echo e($organization['country_id'] == 'IN' ? 'selected' : ''); ?>>India</option>
                                            <option value="ID" <?php echo e($organization['country_id'] == 'ID' ? 'selected' : ''); ?>>Indonesia</option>
                                            <option value="IR" <?php echo e($organization['country_id'] == 'IR' ? 'selected' : ''); ?>>Iran</option>
                                            <option value="IQ" <?php echo e($organization['country_id'] == 'IQ' ? 'selected' : ''); ?>>Iraq</option>
                                            <option value="IE" <?php echo e($organization['country_id'] == 'IE' ? 'selected' : ''); ?>>Ireland</option>
                                            <option value="IL" <?php echo e($organization['country_id'] == 'IL' ? 'selected' : ''); ?>>Israel</option>
                                            <option value="IT" <?php echo e($organization['country_id'] == 'IT' ? 'selected' : ''); ?>>Italy</option>
                                            <option value="JM" <?php echo e($organization['country_id'] == 'JM' ? 'selected' : ''); ?>>Jamaica</option>
                                            <option value="JP" <?php echo e($organization['country_id'] == 'JP' ? 'selected' : ''); ?>>Japan</option>
                                            <option value="JO" <?php echo e($organization['country_id'] == 'JO' ? 'selected' : ''); ?>>Jordan</option>
                                            <option value="KZ" <?php echo e($organization['country_id'] == 'KZ' ? 'selected' : ''); ?>>Kazakhstan</option>
                                            <option value="KE" <?php echo e($organization['country_id'] == 'KE' ? 'selected' : ''); ?>>Kenya</option>
                                            <option value="KI" <?php echo e($organization['country_id'] == 'KI' ? 'selected' : ''); ?>>Kiribati</option>
                                            <option value="KP" <?php echo e($organization['country_id'] == 'KP' ? 'selected' : ''); ?>>North Korea</option>
                                            <option value="KR" <?php echo e($organization['country_id'] == 'KR' ? 'selected' : ''); ?>>South Korea</option>
                                            <option value="KW" <?php echo e($organization['country_id'] == 'KW' ? 'selected' : ''); ?>>Kuwait</option>
                                            <option value="KG" <?php echo e($organization['country_id'] == 'KG' ? 'selected' : ''); ?>>Kyrgyzstan</option>
                                            <option value="LA" <?php echo e($organization['country_id'] == 'LA' ? 'selected' : ''); ?>>Laos</option>
                                            <option value="LV" <?php echo e($organization['country_id'] == 'LV' ? 'selected' : ''); ?>>Latvia</option>
                                            <option value="LB" <?php echo e($organization['country_id'] == 'LB' ? 'selected' : ''); ?>>Lebanon</option>
                                            <option value="LS" <?php echo e($organization['country_id'] == 'LS' ? 'selected' : ''); ?>>Lesotho</option>
                                            <option value="LR" <?php echo e($organization['country_id'] == 'LR' ? 'selected' : ''); ?>>Liberia</option>
                                            <option value="LY" <?php echo e($organization['country_id'] == 'LY' ? 'selected' : ''); ?>>Libya</option>
                                            <option value="LI" <?php echo e($organization['country_id'] == 'LI' ? 'selected' : ''); ?>>Liechtenstein</option>
                                            <option value="LT" <?php echo e($organization['country_id'] == 'LT' ? 'selected' : ''); ?>>Lithuania</option>
                                            <option value="LU" <?php echo e($organization['country_id'] == 'LU' ? 'selected' : ''); ?>>Luxembourg</option>
                                            <option value="MG" <?php echo e($organization['country_id'] == 'MG' ? 'selected' : ''); ?>>Madagascar</option>
                                            <option value="MW" <?php echo e($organization['country_id'] == 'MW' ? 'selected' : ''); ?>>Malawi</option>
                                            <option value="MY" <?php echo e($organization['country_id'] == 'MY' ? 'selected' : ''); ?>>Malaysia</option>
                                            <option value="MV" <?php echo e($organization['country_id'] == 'MV' ? 'selected' : ''); ?>>Maldives</option>
                                            <option value="ML" <?php echo e($organization['country_id'] == 'ML' ? 'selected' : ''); ?>>Mali</option>
                                            <option value="MT" <?php echo e($organization['country_id'] == 'MT' ? 'selected' : ''); ?>>Malta</option>
                                            <option value="MH" <?php echo e($organization['country_id'] == 'MH' ? 'selected' : ''); ?>>Marshall Islands</option>
                                            <option value="MR" <?php echo e($organization['country_id'] == 'MR' ? 'selected' : ''); ?>>Mauritania</option>
                                            <option value="MU" <?php echo e($organization['country_id'] == 'MU' ? 'selected' : ''); ?>>Mauritius</option>
                                            <option value="MX" <?php echo e($organization['country_id'] == 'MX' ? 'selected' : ''); ?>>Mexico</option>
                                            <option value="FM" <?php echo e($organization['country_id'] == 'FM' ? 'selected' : ''); ?>>Micronesia</option>
                                            <option value="MD" <?php echo e($organization['country_id'] == 'MD' ? 'selected' : ''); ?>>Moldova</option>
                                            <option value="MC" <?php echo e($organization['country_id'] == 'MC' ? 'selected' : ''); ?>>Monaco</option>
                                            <option value="MN" <?php echo e($organization['country_id'] == 'MN' ? 'selected' : ''); ?>>Mongolia</option>
                                            <option value="ME" <?php echo e($organization['country_id'] == 'ME' ? 'selected' : ''); ?>>Montenegro</option>
                                            <option value="MA" <?php echo e($organization['country_id'] == 'MA' ? 'selected' : ''); ?>>Morocco</option>
                                            <option value="MZ" <?php echo e($organization['country_id'] == 'MZ' ? 'selected' : ''); ?>>Mozambique</option>
                                            <option value="MM" <?php echo e($organization['country_id'] == 'MM' ? 'selected' : ''); ?>>Myanmar</option>
                                            <option value="NA" <?php echo e($organization['country_id'] == 'NA' ? 'selected' : ''); ?>>Namibia</option>
                                            <option value="NR" <?php echo e($organization['country_id'] == 'NR' ? 'selected' : ''); ?>>Nauru</option>
                                            <option value="NP" <?php echo e($organization['country_id'] == 'NP' ? 'selected' : ''); ?>>Nepal</option>
                                            <option value="NL" <?php echo e($organization['country_id'] == 'NL' ? 'selected' : ''); ?>>Netherlands</option>
                                            <option value="NZ" <?php echo e($organization['country_id'] == 'NZ' ? 'selected' : ''); ?>>New Zealand</option>
                                            <option value="NI" <?php echo e($organization['country_id'] == 'NI' ? 'selected' : ''); ?>>Nicaragua</option>
                                            <option value="NE" <?php echo e($organization['country_id'] == 'NE' ? 'selected' : ''); ?>>Niger</option>
                                            <option value="NG" <?php echo e($organization['country_id'] == 'NG' ? 'selected' : ''); ?>>Nigeria</option>
                                            <option value="MK" <?php echo e($organization['country_id'] == 'MK' ? 'selected' : ''); ?>>North Macedonia</option>
                                            <option value="NO" <?php echo e($organization['country_id'] == 'NO' ? 'selected' : ''); ?>>Norway</option>
                                            <option value="OM" <?php echo e($organization['country_id'] == 'OM' ? 'selected' : ''); ?>>Oman</option>
                                            <option value="PK" <?php echo e($organization['country_id'] == 'PK' ? 'selected' : ''); ?>>Pakistan</option>
                                            <option value="PW" <?php echo e($organization['country_id'] == 'PW' ? 'selected' : ''); ?>>Palau</option>
                                            <option value="PA" <?php echo e($organization['country_id'] == 'PA' ? 'selected' : ''); ?>>Panama</option>
                                            <option value="PG" <?php echo e($organization['country_id'] == 'PG' ? 'selected' : ''); ?>>Papua New Guinea</option>
                                            <option value="PY" <?php echo e($organization['country_id'] == 'PY' ? 'selected' : ''); ?>>Paraguay</option>
                                            <option value="PE" <?php echo e($organization['country_id'] == 'PE' ? 'selected' : ''); ?>>Peru</option>
                                            <option value="PH" <?php echo e($organization['country_id'] == 'PH' ? 'selected' : ''); ?>>Philippines</option>
                                            <option value="PL" <?php echo e($organization['country_id'] == 'PL' ? 'selected' : ''); ?>>Poland</option>
                                            <option value="PT" <?php echo e($organization['country_id'] == 'PT' ? 'selected' : ''); ?>>Portugal</option>
                                            <option value="QA" <?php echo e($organization['country_id'] == 'QA' ? 'selected' : ''); ?>>Qatar</option>
                                            <option value="RO" <?php echo e($organization['country_id'] == 'RO' ? 'selected' : ''); ?>>Romania</option>
                                            <option value="RU" <?php echo e($organization['country_id'] == 'RU' ? 'selected' : ''); ?>>Russia</option>
                                            <option value="RW" <?php echo e($organization['country_id'] == 'RW' ? 'selected' : ''); ?>>Rwanda</option>
                                            <option value="KN" <?php echo e($organization['country_id'] == 'KN' ? 'selected' : ''); ?>>Saint Kitts and Nevis</option>
                                            <option value="LC" <?php echo e($organization['country_id'] == 'LC' ? 'selected' : ''); ?>>Saint Lucia</option>
                                            <option value="VC" <?php echo e($organization['country_id'] == 'VC' ? 'selected' : ''); ?>>Saint Vincent and the Grenadines</option>
                                            <option value="WS" <?php echo e($organization['country_id'] == 'WS' ? 'selected' : ''); ?>>Samoa</option>
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>GST No <?php $__errorArgs = ['gst_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="gst_no" id="gst_no" placeholder="eg. 123456789012345" value="<?php echo e($organization['gst_no']); ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Business License No <?php $__errorArgs = ['business_license_no'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="business_license_no" id="business_license_no" placeholder="eg. BL12345" value="<?php echo e($organization['business_license_no']); ?>" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>City <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="city" id="city" placeholder="eg. New York" value="<?php echo e($organization['city']); ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Address <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="address" id="address" placeholder="eg. 1234 Main St" value="<?php echo e($organization['address']); ?>" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Postal Code <?php $__errorArgs = ['postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="postal_code" id="postal_code" placeholder="eg. 10001" value="<?php echo e($organization['postal_code']); ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Website URL <?php $__errorArgs = ['website_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="website_url" id="website_url" placeholder="eg. www.qotz.com" value="<?php echo e($organization['website_url']); ?>" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12 mt-3 mt-sm-0">
                                        <label>About Organization <?php $__errorArgs = ['about_org'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <textarea class="multisteps-form__input form-control" name="about_org" id="about_org" placeholder="Describe the organization"><?php echo e($organization['about_org']); ?></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Email Domain Whitelist <?php $__errorArgs = ['email_domain_whitelist'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <input class="multisteps-form__input form-control" type="text" name="email_domain_whitelist" id="email_domain_whitelist" placeholder="eg. qotz.com" value="<?php echo e($organization['email_domain_whitelist']); ?>" />
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Producer <?php $__errorArgs = ['is_producer'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <select name="is_producer" id="is_producer" class="multisteps-form__input form-control">
                                            <option value="">Select</option>
                                            <option value="1" <?php echo e($organization['is_producer'] == '1' ? 'selected' : ''); ?>>Yes</option>
                                            <option value="0" <?php echo e($organization['is_producer'] == '0' ? 'selected' : ''); ?>>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Distributor <?php $__errorArgs = ['is_distributor'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <select name="is_distributor" id="is_distributor" class="multisteps-form__input form-control">
                                            <option value="">Select</option>
                                            <option value="1" <?php echo e($organization['is_distributor'] == '1' ? 'selected' : ''); ?>>Yes</option>
                                            <option value="0" <?php echo e($organization['is_distributor'] == '0' ? 'selected' : ''); ?>>No</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Air Cargo Provider <?php $__errorArgs = ['is_air_cargo_provider'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <select name="is_air_cargo_provider" id="is_air_cargo_provider" class="multisteps-form__input form-control">
                                            <option value="">Select</option>
                                            <option value="1" <?php echo e($organization['is_air_cargo_provider'] == '1' ? 'selected' : ''); ?>>Yes</option>
                                            <option value="0" <?php echo e($organization['is_air_cargo_provider'] == '0' ? 'selected' : ''); ?>>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Ocean Cargo Provider <?php $__errorArgs = ['is_ocean_cargo_provider'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <select name="is_ocean_cargo_provider" id="is_ocean_cargo_provider" class="multisteps-form__input form-control">
                                            <option value="">Select</option>
                                            <option value="1" <?php echo e($organization['is_ocean_cargo_provider'] == '1' ? 'selected' : ''); ?>>Yes</option>
                                            <option value="0" <?php echo e($organization['is_ocean_cargo_provider'] == '0' ? 'selected' : ''); ?>>No</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                        <label>Road Cargo Provider <?php $__errorArgs = ['is_road_cargo_provider'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <select name="is_road_cargo_provider" id="is_road_cargo_provider" class="multisteps-form__input form-control">
                                            <option value="">Select</option>
                                            <option value="1" <?php echo e($organization['is_road_cargo_provider'] == '1' ? 'selected' : ''); ?>>Yes</option>
                                            <option value="0" <?php echo e($organization['is_road_cargo_provider'] == '0' ? 'selected' : ''); ?>>No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>Organization Status <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"> * <?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" id="radio" value="Y" <?php if($organization->status == 'Y'){ ?>checked<?php } ?>><span class="form-check-label">Active</span>
                                        </label>
                                        <label class="form-check">
                                            <input type="radio" class="form-check-input" name="status" id="radio" value="N" <?php if($organization->status == 'N'){ ?>checked<?php } ?>><span class="form-check-label">Inactive</span>
                                        </label>
                                    </div>
                                    
                                </div>



                                <div class="button-row d-flex mt-4">
                                    <!-- <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                        Next
                                    </button> -->
                                    <input type="submit" class="btn bg-gradient-dark ms-auto mb-0" name="Submit"/>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Permissions</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col">
                                        <label>Address 1</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Street 111" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <label>Address 2</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Street 221" />
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-6">
                                        <label>City</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="eg. Tokyo" />
                                    </div>
                                    <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                        <label>State</label>
                                        <select class="multisteps-form__select form-control">
                                            <option selected="selected">...</option>
                                            <option value="1">State 1</option>
                                            <option value="2">State 2</option>
                                        </select>
                                    </div>
                                    <div class="col-6 col-sm-3 mt-3 mt-sm-0">
                                        <label>Zip</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="7 letters" />
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                        Prev
                                    </button>
                                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                        Next
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Socials</h5>
                            <div class="multisteps-form__content">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <label>Twitter Handle</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="@argon" />
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label>Facebook Account</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="https://..." />
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label>Instagram Account</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="https://..." />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="button-row d-flex mt-4 col-12">
                                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                            Prev
                                        </button>
                                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">
                                            Next
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card multisteps-form__panel p-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
                            <h5 class="font-weight-bolder">Profile</h5>
                            <div class="multisteps-form__content mt-3">
                                <div class="row">
                                    <div class="col-12">
                                        <label>Public Email</label>
                                        <input class="multisteps-form__input form-control" type="text" placeholder="Use an address you don't use frequently." />
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label>Bio</label>
                                        <textarea class="multisteps-form__textarea form-control" rows="5" placeholder="Say a few words about who you are or what you're working on."></textarea>
                                    </div>
                                </div>
                                <div class="button-row d-flex mt-4">
                                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">
                                        Prev
                                    </button>
                                    <input type="submit" class="btn bg-gradient-dark ms-auto mb-0" name="Submit"/>
                                </div>
                            </div>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo e(url('admin/assets/js/plugins/datatables.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/dragula/dragula.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/core/popper.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/core/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/perfect-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/smooth-scrollbar.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/multistep-form.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/dragula/dragula.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/assets/js/plugins/jkanban/jkanban.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('wbxadmin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/qotz/resources/views/wbxadmin/organizations/edit.blade.php ENDPATH**/ ?>
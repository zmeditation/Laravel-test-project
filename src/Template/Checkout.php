<?php

namespace silverorange\DevTest\Template;

use silverorange\DevTest\Context;

/**
 * Template for the checkout page
 */
class Checkout extends Layout
{
    protected function renderPage(Context $context): string
    {
        $content = $this->header->render($context);

        // @codingStandardsIgnoreStart
        return <<<HTML
                <form method="post" accept-charset="utf-8" action="checkout" class="form" novalidate="novalidate">
                    <div class="frame">
                        <h2 class="frame__title">Order Summary</h2>
                        <div class="frame__contents check__mark_content">
                            <i class="fas fa-check"></i>
                            With our “Rise & Shine” beta program, you get early access to new features, but they may not always work perfectly. You can change your beta preference at any time after you join.
                        </div>
                        <div class="frame__contents">
                            <table class="order-summary">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                        <img class="image_thumb" src="/assets/product.jpg" /></td>
                                        <td>Lorem Widget</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="frame">
                        <h2 class="frame__title">Account Details</h2>
                        <div class="frame__contents">
                            <div class="form-field form-field--required">
                                <label class="form-field__label" for="first_name">First Name: <span class="form-field__label-required"> (required)</span></label>
                                <div class="form-field__contents">
                                    <input type="text" name="first_name" id="first_name" class="entry" value="Michael" size="17" maxlength="255" />
                                </div>
                            </div>
                            <div class="form-field form-field--required">
                                <label class="form-field__label" for="last_name">Last Name: <span class="form-field__label-required"> (required)</span></label>
                                <div class="form-field__contents">
                                    <input type="text" name="last_name" id="last_name" class="entry" value="Gauthier" size="17" maxlength="255" />
                                </div>
                            </div>
                            <div class="form-field">
                                <label class="form-field__label" for="suffix">Suffix: </label>
                                <div class="form-field__contents">
                                    <input type="text" name="suffix" id="suffix" class="entry" value="" size="5" maxlength="255" />
                                </div>
                            </div>
                            <div class="form-field form-field--required">
                                <label class="form-field__label" for="email">Email: <span class="form-field__label-required"> (required)</span></label>
                                <div class="form-field__contents">
                                    <input type="email" name="email" id="email" class="entry entry--email" value="" size="50" maxlength="255" />
                                </div>
                                <div class="form-field__note">Your email address is used to sign into your account. We value your privacy and will not sell or share your email address.</div>
                            </div>
                        </div>
                    </div>
                    <div class="frame">
                        <h2 class="frame__title">Billing Address</h2>
                        <div class="frame__contents">
                            <div class="form-field form-field--required">
                                <label class="form-field__label" for="billing_address_first_name">First Name: <span class="form-field__label-required"> (required)</span></label>
                                <div class="form-field__contents">
                                    <input type="text" name="billing_address_first_name" id="billing_address_first_name" class="entry" value="Michael" size="17" maxlength="255" />
                                </div>
                            </div>
                            <div class="form-field form-field--required">
                                <label class="form-field__label" for="billing_address_last_name">Last Name: <span class="form-field__label-required"> (required)</span></label>
                                <div class="form-field__contents">
                                    <input type="text" name="billing_address_last_name" id="billing_address_last_name" class="entry" value="Gauthier" size="17" maxlength="255" />
                                </div>
                            </div>
                            <div class="form-field form-field--required">
                                <label class="form-field__label" for="billing_address_line1">Address Line1: <span class="form-field__label-required"> (required)</span></label>
                                <div class="form-field__contents">
                                    <div class="textarea__container">
                                        <textarea name="billing_address_line1" id="billing_address_line1" class="textarea" rows="2" cols="35"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-field form-field--required">
                                <label class="form-field__label" for="billing_address_line2">Address Line2:</label>
                                <div class="form-field__contents">
                                    <div class="textarea__container">
                                        <textarea name="billing_address_line2" id="billing_address_line2" class="textarea" rows="2" cols="35"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-field form-field--required">
                                <label class="form-field__label" for="billing_address_city">City: <span class="form-field__label-required"> (required)</span></label>
                                <div class="form-field__contents">
                                    <input type="text" name="billing_address_city" id="billing_address_city" class="entry" value="" size="35" maxlength="255" />
                                </div>
                            </div>
                            <div class="form-field form-field--required">
                                <label class="form-field__label" for="billing_address_postalcode">ZIP/Postal Code: <span class="form-field__label-required"> (required)</span></label>
                                <div class="form-field__contents">
                                    <input type="text" name="billing_address_postalcode" id="billing_address_postalcode" class="entry entry--postal-code" value="" size="10" maxlength="50" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn_div">
                        <button class="btn">
                        <i class="fa-solid fa-cart-shopping cart-icon"></i>Place Order</button>
                    </div>
                </form>
HTML;
        // @codingStandardsIgnoreEnd
    }
}

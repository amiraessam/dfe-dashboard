<?php namespace DreamFactory\Enterprise\Dashboard\Partners;

use DreamFactory\Enterprise\Partner\SitePartner;
use Illuminate\Http\Request;

class PoC extends SitePartner
{
    //******************************************************************************
    //* Methods
    //******************************************************************************

    /**
     * Get the partner's content for placement
     *
     * @param bool $minimal True if minimal content is requested
     *
     * @return string
     */
    public function getWebsiteContent($minimal = false)
    {
        $_brand = $this->getPartnerBrand();
        $_icon = '<img src="' . $_brand->getLogo(true) . '" class="partner-brand">';

        return <<<HTML
<div class="alert alert-info alert-fixed alert-dismissable partner-well" role="alert">
    <button type="button" class="close" style="padding-right: 5px;" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3>{$_icon} {$this->getPartnerDetail('name')} <small>{$_brand->getCopyright($minimal)}</small></h3>
    <p>{$_brand->getCopy($minimal)}</p>
</div>
HTML;
    }

    /** @inheritdoc */
    public function getPartnerResponse(Request $request)
    {
        switch ($request->input('command')) {
            case 'utc_post':
                //  do utc shit here

                break;
        }

        //  redirect home
        \Redirect::home();
    }

}
<?php

namespace InstagramScraper\Model;


class Like extends AbstractModel
{
    /**
     * @var
     */
    protected $id;

    /**
     * @var Account
     */
    protected $username;

    protected $full_name;

    protected $profile_pic_url;

    protected $is_verified;

    protected $followed_by_viewer;

    protected $requested_by_viewer;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->username;
    }

    /**
     * @return mixed
     */
    public function getFullName()
    {
        return $this->full_name;
    }

    /**
     * @return mixed
     */
    public function getProfilePicUrl()
    {
        return $this->profile_pic_url;
    }

    public function isVerified()
    {
        return $this->is_verified;
    }

    public function getFollowedByViewer()
    {
        return $this->followed_by_viewer;
    }

    public function getRequestedByViewer()
    {
        return $this->requested_by_viewer;
    }

    /**
     * @param $value
     * @param $prop
     */
    protected function initPropertiesCustom($value, $prop)
    {
        switch ($prop) {
            case 'id':
                $this->id = $value;
                break;
            case 'username':
                $this->username = $value;
                break;
            case 'full_name':
                $this->full_name = $value;
                break;
            case 'profile_pic_url':
                $this->profile_pic_url = $value;
                break;
            case 'is_verified':
                $this->is_verified = $value;
                break;
            case 'followed_by_viewer':
                $this->followed_by_viewer = $value;
                break;
            case 'requested_by_viewer':
                $this->requested_by_viewer = $value;
                break;
        }
    }

}
≈<?php

namespace Jira\Remote;
use Jira\JiraClient;

class RemoteComment extends RemoteEntity implements CreatableInterface
{
    
    public $author;
    public $body;
    public $created;
    public $groupLevel;
    public $roleLevel;
    public $updateAuthor;
    public $updated;

    public function create(JiraClient $jira_client)
    {
        $data = $jira_client->call('addComment', $this);
        return new RemoteComment($data);
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getCreated()
    {
        return $this->created();
    }

    public function getGroupLevel()
    {
        return $this->groupLevel;
    }

    public function getRoleLevel()
    {
        return $this->roleLevel;
    }

    public function getUpdatedAuthor()
    {
        return $this->getUpdatedAuthor;
    }

    public function getUpdated()
    {
        return $this->updated;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function setCreated()
    {
        $this->created = date('Y-m-d\TH:i:sP');
        return $this;
    }

    public function setGroupLevel($groupLevel)
    {
        $this->groupLevel = $groupLevel;
        return $this;
    }

    public function setRoleLevel($roleLevel)
    {
        $this->roleLevel = $roleLevel;
        return $this;
    }

    public function setUpdateAuthor($author)
    {
        $this->updateAuthor = $author;
        return $this;
    }

    public function setUpdated()
    {
        $this->created = date('Y-m-d\TH:i:sP');
        return $this;
    }

}

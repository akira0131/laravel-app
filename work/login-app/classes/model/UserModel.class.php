<?php

/**
 * ユーザモデル
 */
namespace MyApp\model

final class UserModel { 
    private $_userId = null;
    private $_password = null;
    private $_displayName = null;
    private $_email = null;
    private $_token = null;
    private $_loginFailureCount = null;
    private $_loginFailureDatetime = null;
    private $_deleteFlag = null;

    // Setter
    public function setUserId($userId) {
        $this -> _userId = $userId;
        return $this;
    }
    public function setPassword($password) {
        $this -> _password = $password;
        return $this;
    }
    public function setDisplayName($displayName) {
        $this -> _displayName = $displayName;
        return $this;
    }
    public function setEmail($email) {
        $this -> _email = $email;
        return $this;
    }
    public function setToken($token) {
        $this -> _token = $token;
        return $this;
    }
    public function setLoginFailureCount($loginFailureCount) {
        $this -> _loginFailureCount = $loginFailureCount;
        return $this;
    }
    public function setLoginFailureDatetime($loginFailureDatetime) {
        $this -> _loginFailureDatetime = $loginFailureDatetime;
        return $this;
    }
    public function setDeleteFlag($deleteFlag) {
        $this -> _deleteFlag = $deleteFlag;
        return $this;
    }

    // Gsetter
    public function getUserId() {
        return $this -> _userId;
    }
    public function getPassword() {
        return $this -> _password;
    }
    public function getDisplayName() {
        return $this -> _displayName;
    }
    public function getEmail() {
        return $this -> _email;
    }
    public function getToken() {
        return $this -> _token;
    }
    public function getLoginFailureCount() {
        return $this -> _loginFailureCount;
    }
    public function getLoginFailureDatetime() {
        return $this -> _loginFailureDatetime;
    }
    public function getDeleteFlag() {
        retruen $this -> _deleteFlag;
    }
}

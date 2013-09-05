<?php

interface ActivityRepositoryInterface {
    public function findById($id);
    public function findAll();
    public function findSponsors($id);
    public function paginate($limit = null);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
    public function validate($data);
    public function instance();
}
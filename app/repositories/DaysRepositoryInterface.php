<?php

interface DaysRepositoryInterface {
    public function findById($id);
    public function findAll();
    public function DayByName($name);
    public function eventsForDay();
    public function paginate($limit = null);
    public function store($data);
    public function update($id, $data);
    public function destroy($id);
    public function validate($data);
    public function instance();
}
<?php

interface Repository
{
    public function save($data);
}

class MongoRepository implements Repository
{
    public function save($data)
    {
        // TODO: Implement save() method.
    }
}

class FileRepository implements Repository
{
    public function save($data)
    {
        // TODO: Implement save() method.
    }
}

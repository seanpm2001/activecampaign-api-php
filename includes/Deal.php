<?php

namespace ActiveCampaign\Api\V1;

class Deal extends ActiveCampaign
{

    public $version;
    public $url_base;
    public $url;
    public $api_key;

    public function __construct($version, $url_base, $url, $api_key)
    {
        $this->version = $version;
        $this->url_base = $url_base;
        $this->url = $url;
        $this->api_key = $api_key;
    }

    public function add($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_add&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function edit($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_edit&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function delete($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_delete&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function get($params)
    {
        $request_url = "{$this->url}&api_action=deal_get&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function list_($params)
    {
        $request_url = "{$this->url}&api_action=deal_list&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function note_add($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_note_add&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function note_edit($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_note_edit&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function pipeline_add($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_pipeline_add&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function pipeline_edit($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_pipeline_edit&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function pipeline_delete($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_pipeline_delete&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function pipeline_list($params)
    {
        $request_url = "{$this->url}&api_action=deal_pipeline_list&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function stage_add($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_stage_add&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function stage_edit($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_stage_edit&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function stage_delete($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_stage_delete&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function stage_list($params)
    {
        $request_url = "{$this->url}&api_action=deal_stage_list&api_output={$this->output}&{$params}";
        $response = $this->curl($request_url);
        return $response;
    }

    public function task_add($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_task_add&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function task_edit($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_task_edit&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function tasktype_add($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_tasktype_add&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function tasktype_edit($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_tasktype_edit&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }

    public function tasktype_delete($params, $post_data)
    {
        $request_url = "{$this->url}&api_action=deal_tasktype_delete&api_output={$this->output}";
        $response = $this->curl($request_url, $post_data);
        return $response;
    }
}
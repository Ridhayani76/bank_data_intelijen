<?php

/**
  * @OA\Get(
  *      path="/v1/entities/register-arsip",
  *      operationId="browseR.IN.6-RegisterArsip",
  *      tags={"register-arsip"},
  *      summary="Browse R.IN.6 - Register Arsip",
  *      description="Returns list of R.IN.6 - Register Arsip",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/register-arsip/read?slug=register-arsip&id={id}",
  *      operationId="readR.IN.6-RegisterArsip",
  *      tags={"register-arsip"},
  *      summary="Get R.IN.6 - Register Arsip based on id",
  *      description="Returns R.IN.6 - Register Arsip based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/register-arsip/add",
  *      operationId="addR.IN.6-RegisterArsip",
  *      tags={"register-arsip"},
  *      summary="Insert new R.IN.6 - Register Arsip",
  *      description="Insert new R.IN.6 - Register Arsip into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"waktu terima":"Abc", "diterima dari":"Abc", "nomor":"Abc", "tanggal surat":"Abc", "perihal":"Abc", "lampiran":"Abc", "kode penyimpanan":"Abc", "keterangan":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-arsip/edit",
  *      operationId="editR.IN.6-RegisterArsip",
  *      tags={"register-arsip"},
  *      summary="Edit an existing R.IN.6 - Register Arsip",
  *      description="Edit an existing R.IN.6 - Register Arsip",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"waktu terima":"Abc", "diterima dari":"Abc", "nomor":"Abc", "tanggal surat":"Abc", "perihal":"Abc", "lampiran":"Abc", "kode penyimpanan":"Abc", "keterangan":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-arsip/delete",
  *      operationId="deleteR.IN.6-RegisterArsip",
  *      tags={"register-arsip"},
  *      summary="Delete one record of R.IN.6 - Register Arsip",
  *      description="Delete one record of R.IN.6 - Register Arsip",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-arsip",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/register-arsip/delete-multiple",
  *      operationId="deleteMultipleR.IN.6-RegisterArsip",
  *      tags={"register-arsip"},
  *      summary="Delete multiple record of R.IN.6 - Register Arsip",
  *      description="Delete multiple record of R.IN.6 - Register Arsip",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-arsip",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/register-arsip/sort",
  *      operationId="sortR.IN.6-RegisterArsip",
  *      tags={"register-arsip"},
  *      summary="Sort existing R.IN.6 - Register Arsip",
  *      description="Sort existing R.IN.6 - Register Arsip",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="register-arsip",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "waktu terima":"Abc", "diterima dari":"Abc", "nomor":"Abc", "tanggal surat":"Abc", "perihal":"Abc", "lampiran":"Abc", "kode penyimpanan":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "waktu terima":"Abc", "diterima dari":"Abc", "nomor":"Abc", "tanggal surat":"Abc", "perihal":"Abc", "lampiran":"Abc", "kode penyimpanan":"Abc", "keterangan":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="waktu terima"), 
  *                         @OA\Property(type="string", property="diterima dari"), 
  *                         @OA\Property(type="string", property="nomor"), 
  *                         @OA\Property(type="string", property="tanggal surat"), 
  *                         @OA\Property(type="string", property="perihal"), 
  *                         @OA\Property(type="string", property="lampiran"), 
  *                         @OA\Property(type="string", property="kode penyimpanan"), 
  *                         @OA\Property(type="string", property="keterangan"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */